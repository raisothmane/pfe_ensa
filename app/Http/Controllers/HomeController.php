<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }
    public function Admin_User_Table()
    {
        // get all users from the database
        $users = User::paginate(10);
        // return the view and pass the users


        return view('admin.user_table', ['users' => $users]);
    }
       

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user_table')->with('success', 'User deleted successfully.');
    }

   
     // Categories

     public function indexCategories()
     {
        $categories = Category::paginate(10); // Change '10' to the number of items per page you desire
    return view('admin.categories.index', compact('categories'));
     }

     public function createCategory()
     {
         return view('admin.categories.create');
     }
 
     public function storeCategory(Request $request)
     {
         Category::create($request->all());
         return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
     }
 
     public function editCategory($id)
     {
         $category = Category::findOrFail($id);
         return view('admin.categories.edit', compact('category'));
     }
 
     public function updateCategory(Request $request, $id)
     {
         $category = Category::findOrFail($id);
         $category->update($request->all());
         return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
     }
 
     public function deleteCategory($id)
     {
         $category = Category::findOrFail($id);
         $category->delete();
         return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
     }
 
     // Questions
 
     public function indexQuestions()
     {
         $questions = Question::with('category' )->paginate(25) ;
        
         return view('admin.questions.index', compact('questions' ));
     }
     public function createQuestion()
     {
         $categories = Category::all();
         return view('admin.questions.create', compact('categories'));
     }
     public function storeQuestion(Request $request)
    {
        Question::create($request->all());
        return redirect()->route('admin.questions.index')->with('success', 'Question created successfully.');
    }
     public function editQuestion($id)
     {
         $question = Question::findOrFail($id);
         $categories = Category::all();
         return view('admin.questions.edit', compact('question', 'categories'));
     }
 
     public function updateQuestion(Request $request, $id)
     {
         $question = Question::findOrFail($id);
         $question->update($request->all());
         return redirect()->route('admin.questions.index')->with('success', 'Question updated successfully.');
     }
 
     public function deleteQuestion($id)
     {
         $question = Question::findOrFail($id);
         $question->delete();
         return redirect()->route('admin.questions.index')->with('success', 'Question deleted successfully.');
     }
 
     // Answers
 
     public function indexAnswers()
     {
        
         $answers = Answer::with('question')->paginate(25);
        // $answers = Answer::with('question')->where('is_correct', 1)->paginate(25);
         return view('admin.answers.index', compact('answers'));
     }
 

     public function createAnswer()
     {
         $questions = Question::all();
         return view('admin.answers.create', compact('questions'));
     }
 
     public function storeAnswer(Request $request)
     {
         Answer::create($request->all());
         return redirect()->route('admin.answers.index')->with('success', 'Answer created successfully.');
     }
     
     public function editAnswer($id)
     {
         $answer = Answer::findOrFail($id);
         $questions = Question::orderBy('text')->get();
         return view('admin.answers.edit', compact('answer', 'questions'));
     }
     public function updateAnswer(Request $request, $id)
     {
         $validatedData = $request->validate([
             'question_id' => 'required|exists:questions,id',
             'text' => 'required|string',
             'is_correct' => 'required|boolean',
         ]);
 
         $answer = Answer::findOrFail($id);
         $answer->update($validatedData);
 
         return redirect()->route('admin.answers.index')->with('success', 'Answer updated successfully.');
     }
     public function deleteAnswer($id)
     {
         $answer = Answer::findOrFail($id);
         $answer->delete();
         return redirect()->route('admin.answers.index')->with('success', 'Answer deleted successfully.');
     }
    

}

