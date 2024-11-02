<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class PopularController extends Controller
{
    public function show(){
        $articles = Article::paginate(3);
        $activePage = 'popular';

        return view('popular',compact('articles','activePage'));
    }
}
