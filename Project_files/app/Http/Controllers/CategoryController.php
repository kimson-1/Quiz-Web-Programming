<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class CategoryController extends Controller
{
    public function show($slug){

        $categories = [
            'DS' => 'Data Science',
            'NW' => 'Network Security'
        ];

        $categoryName = $categories[$slug];
        $activePage = 'category';

        $articles = Article::where('category',$slug)->get();

        return view('category',compact('articles','categoryName','activePage'));
    }
}
