<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Article;


class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $totalArticles = Article::count(); 
        $myArticles = Article::where('user_id', $user->id)->count(); 
        $latestArticles = Article::latest()->take(5)->get();

        return view('pages.dashboard', compact(
            'user',
            'totalArticles',
            'myArticles',
            'latestArticles'
        ));
    }
}
