<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $articles = Article::all();
        $activePage = 'dashboard';

        return view('dashboard',compact('articles','activePage'));
    }
}
