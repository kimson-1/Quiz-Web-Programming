<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show($slug){

        $activePage = 'category';

        $articles = Article::where('Title','LIKE',str_replace('-',' ',$slug))->first();

        return view('detail',compact('articles','activePage'));
    }
}
