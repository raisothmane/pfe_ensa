<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Question;
use App\Models\Answer;

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
    
        // Store the score in the database
        // PlayerScore::create([
        //     'user_id' => auth()->user()->id,
        //     'category_id' => Question::find(array_key_first($selectedAnswers))->category_id,
        //     'score' => $scorePercentage
        // ]);
    
        return view('quiz.result', compact('correctCount', 'totalQuestions', 'scorePercentage'));
    }
    
    
    
}

