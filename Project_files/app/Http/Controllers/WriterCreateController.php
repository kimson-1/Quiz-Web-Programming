<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Writer;

class WriterCreateController extends Controller
{
    public function show($slug){
       
        $writer = Writer::where('name', 'Like', str_replace('-', ' ', $slug))->first();
       
        $articles = Article::where('writer_id', $writer->id)->get();
        $activePage = 'writer'; 

        return view('writeCreate',compact('articles','activePage','writer'));
    }
}
