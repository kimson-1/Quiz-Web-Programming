<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Writer;


class WriterController extends Controller
{
    public function show(){

        $activePage = 'writer';

        $writer = Writer::all();

        return view('writer',compact('writer','activePage'));
    }
}
