<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

// Halaman utama
Route::get('/', function () {
    return view('home');
});

// Route untuk menampilkan kuis sesuai id
Route::get('/kuis/{id}', [QuizController::class, 'show'])->name('quiz.show');
