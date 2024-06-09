<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\LeaderboardController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
     Route::get('/start', [QuizController::class, 'start'])->name('quiz.start');
     Route::post('/submit', [QuizController::class, 'submit'])->name('quiz.submit');
});
require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])-> middleware(['auth', 'admin']) ;
   
// Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
// Route::get('/start', [QuizController::class, 'start'])->name('quiz.start');
// Route::post('/submit', [QuizController::class, 'submit'])->name('quiz.submit');


Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard.index');

// Route::post('/quiz/start', [QuizController::class, 'start'])->name('quiz.start');
// Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');

// Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
// Route::get('/start', [QuizController::class, 'start'])->name('quiz.start');
// Route::post('/submit', [QuizController::class, 'submit'])->name('quiz.submit');