<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    // --- Tampilkan kuis sesuai jurusan ---
    public function show($id)
    {
        $quiz = Quiz::find($id);

        if (!$quiz) {
            abort(404, 'Quiz tidak ditemukan');
        }

        if ($quiz->jurusan === 'tkj') {
            return view('quiz_tkj', compact('quiz'));
        } elseif ($quiz->jurusan === 'rpl') {
            return view('quiz_rpl', compact('quiz'));
        } else {
            return view('home')->with('error', 'Jurusan tidak dikenali');
        }
    }

    // --- Simpan hasil ke leaderboard (langsung dari JS) ---
    public function saveResult(Request $request)
    {
        $quizId = $request->quiz_id;
        $quiz = Quiz::find($quizId);

        if (!$quiz) {
            return redirect('/')->with('error', 'Quiz tidak ditemukan.');
        }

        // Simpan ke DB
        DB::table('quiz_results')->insert([
            'name' => $request->name,
            'quiz_id' => $quizId,
            'jurusan' => $quiz->jurusan,
            'score' => $request->score,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Arahkan langsung ke leaderboard
        return redirect('/leaderboard')->with('success', 'Nilai kamu sudah disimpan!');
    }

    // --- Tampilkan leaderboard ---
    public function leaderboard()
    {
        $results = DB::table('quiz_results')
            ->orderByDesc('score')
            ->limit(10)
            ->get();

        return view('leaderboard', compact('results'));
    }
}
