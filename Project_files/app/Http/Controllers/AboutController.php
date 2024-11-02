<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show(){

        $activePage='about';

        return view('About',compact('activePage'));
    }
}