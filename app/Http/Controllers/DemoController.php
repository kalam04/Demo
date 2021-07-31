<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    function Home(){
        return view('welcome');
    }



    function about(){
        $todos = Todo::get();
        return view('income.about',compact('todos'));
    }
}
