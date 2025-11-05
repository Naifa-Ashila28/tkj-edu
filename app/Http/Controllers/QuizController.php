<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function show($id)
    {
        $quiz = Quiz::with('questions')->find($id);

        if (!$quiz) {
            abort(404, 'Quiz tidak ditemukan');
        }

        // Tampilkan view sesuai jurusan
        if ($quiz->jurusan === 'tkj') {
            return view('quiz_tkj', compact('quiz'));
        } elseif ($quiz->jurusan === 'rpl') {
            return view('quiz_rpl', compact('quiz'));
        } else {
            // fallback kalau jurusan tidak dikenali
            return view('home')->with('error', 'Jurusan tidak dikenali');
        }
    }
}
