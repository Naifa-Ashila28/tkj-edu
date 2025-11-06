<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResult;

class LeaderboardController extends Controller
{
    public function index()
    {
        $results = QuizResult::orderBy('score', 'desc')->take(10)->get();
        return view('leaderboard', compact('results'));
    }
}
