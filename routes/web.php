<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\LeaderboardController;
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::get('/start', [QuizController::class, 'start'])->name('quiz.start');
    Route::post('/submit', [QuizController::class, 'submit'])->name('quiz.submit');
});

Route::get('admin/dashboard', [HomeController::class, 'index'])-> middleware(['auth', 'admin'])->name('Admin_Dashboard') ;
Route::get('admin/user_table', [HomeController::class, 'Admin_User_Table'])->middleware(['auth', 'admin'])->name('user_table');
Route::delete('/users/{id}', [HomeController::class, 'destroy'])
    ->middleware(['auth', 'admin'])
    ->name('users.destroy');

    
// Category routes
Route::get('admin/categories', [HomeController::class, 'indexCategories'])->middleware(['auth', 'admin'])->name('admin.categories.index');
Route::get('admin/categories/create', [HomeController::class, 'createCategory'])->middleware(['auth', 'admin'])->name('admin.categories.create');
Route::post('admin/categories', [HomeController::class, 'storeCategory'])->middleware(['auth', 'admin'])->name('admin.categories.store');
Route::get('admin/categories/{id}/edit', [HomeController::class, 'editCategory'])->middleware(['auth', 'admin'])->name('admin.categories.edit');
Route::put('admin/categories/{id}', [HomeController::class, 'updateCategory'])->middleware(['auth', 'admin'])->name('admin.categories.update');
Route::delete('admin/categories/{id}', [HomeController::class, 'deleteCategory'])->middleware(['auth', 'admin'])->name('admin.categories.delete');

// Question routes
Route::get('admin/questions', [HomeController::class, 'indexQuestions'])->middleware(['auth', 'admin'])->name('admin.questions.index');
Route::get('admin/questions/create', [HomeController::class, 'createQuestion'])->middleware(['auth', 'admin'])->name('admin.questions.create');
Route::post('admin/questions', [HomeController::class, 'storeQuestion'])->middleware(['auth', 'admin'])->name('admin.questions.store');
Route::get('admin/questions/{id}/edit', [HomeController::class, 'editQuestion'])->middleware(['auth', 'admin'])->name('admin.questions.edit');
Route::put('admin/questions/{id}', [HomeController::class, 'updateQuestion'])->middleware(['auth', 'admin'])->name('admin.questions.update');
Route::delete('admin/questions/{id}', [HomeController::class, 'deleteQuestion'])->middleware(['auth', 'admin'])->name('admin.questions.delete');

// Answer routes
Route::get('admin/answers', [HomeController::class, 'indexAnswers'])->middleware(['auth', 'admin'])->name('admin.answers.index');
Route::get('admin/answers/create', [HomeController::class, 'createAnswer'])->middleware(['auth', 'admin'])->name('admin.answers.create');
Route::post('admin/answers', [HomeController::class, 'storeAnswer'])->middleware(['auth', 'admin'])->name('admin.answers.store');
Route::get('admin/answers/{id}/edit', [HomeController::class, 'editAnswer'])->middleware(['auth', 'admin'])->name('admin.answers.edit');
Route::put('admin/answers/{id}', [HomeController::class, 'updateAnswer'])->middleware(['auth', 'admin'])->name('admin.answers.update');
Route::delete('admin/answers/{id}', [HomeController::class, 'deleteAnswer'])->middleware(['auth', 'admin'])->name('admin.answers.delete');

// Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
// Route::get('/start', [QuizController::class, 'start'])->name('quiz.start');
// Route::post('/submit', [QuizController::class, 'submit'])->name('quiz.submit');


Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard.index');

// Route::post('/quiz/start', [QuizController::class, 'start'])->name('quiz.start');
// Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');

// Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
// Route::get('/start', [QuizController::class, 'start'])->name('quiz.start');
// Route::post('/submit', [QuizController::class, 'submit'])->name('quiz.submit');