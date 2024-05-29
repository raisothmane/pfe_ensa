<?php

namespace App\Http\Controllers;
use App\Models\Score;
use App\Models\Category;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index(Request $request)
    {
        // Get all categories for the dropdown
        $categories = Category::all();

        // Get selected category ID from the request
        $selectedCategoryId = $request->input('category_id');

        // Initialize leaderboard
        $leaderboard = [];

        if ($selectedCategoryId) {
            // Get top 10 players in the selected category
            $leaderboard = Score::with('user')
                ->where('category_id', $selectedCategoryId)
                ->orderBy('score', 'desc')
                ->take(10)
                ->get();
        }

        return view('leaderboard.index', compact('categories', 'selectedCategoryId', 'leaderboard'));
    }
}
