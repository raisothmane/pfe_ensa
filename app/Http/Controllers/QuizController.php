<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Score;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('quiz.index', compact('categories'));
    }

    public function start(Request $request)
    {
        $categoryId = $request->input('category_id');
      
        // Retrieve 10 random questions for the selected category
        $questions = Question::where('category_id', $categoryId)
            ->inRandomOrder()
            ->limit(10)
            ->get();
            
        // Retrieve answers for the questions
        $answers = Answer::whereIn('question_id', $questions->pluck('id'))
            ->get()
            ->groupBy('question_id');
    
        return view('quiz.play', compact('questions', 'answers'));
    }

    public function submit(Request $request)
    {
        $selectedAnswers = $request->input('selected_answers');
    
        // Retrieve the correct answers from the database
        $correctAnswers = Answer::whereIn('question_id', array_keys($selectedAnswers))
            ->where('is_correct', true)
            ->pluck('id', 'question_id');
    
        // Debugging
        // Log::info('Selected Answers: ' . json_encode($selectedAnswers));
        // Log::info('Correct Answers: ' . json_encode($correctAnswers->toArray()));
    
        // Calculate the score
        $totalQuestions = count($selectedAnswers);
        $correctCount = 0;
    
        foreach ($selectedAnswers as $questionId => $selectedAnswerId) {
            if (isset($correctAnswers[$questionId]) && $correctAnswers[$questionId] == $selectedAnswerId) {
                $correctCount++;
            }
        }
    
        $scorePercentage = ($correctCount / $totalQuestions) * 100;
         // Retrieve the category ID from the first question
    $firstQuestionId = array_key_first($selectedAnswers);
    $categoryId = Question::find($firstQuestionId)->category_id;
     
    // Get the current user
    $user = auth()->user();

    // Check if a score record exists for this user and category
    $score = Score::where('user_id', $user->id)
                  ->where('category_id', $categoryId)
                  ->first();


                  if ($score) {
                    // Update the existing score
                    $score->score += $correctCount;
                    $score->save();
                } else {
                    // Create a new score record
                    Score::create([
                        'user_id' => $user->id,
                        'category_id' => $categoryId,
                        'score' => $correctCount,
                    ]);
                }
    
        return view('quiz.result', compact('correctCount', 'totalQuestions', 'scorePercentage'));
    }
    
    
    
}

