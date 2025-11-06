<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🏠 Halaman utama
Route::get('/', function () {
    return view('home');
});

// 🎯 Tampilkan halaman kuis berdasarkan ID
Route::get('/kuis/{id}', [QuizController::class, 'show'])->name('quiz.show');

// 💾 Simpan hasil kuis langsung ke leaderboard (tanpa halaman hasil terpisah)
Route::post('/quiz/{id}/save', [QuizController::class, 'saveResult'])->name('quiz.saveResult');

// 🏆 Tampilkan leaderboard
Route::get('/leaderboard', [QuizController::class, 'leaderboard'])->name('leaderboard.index');
