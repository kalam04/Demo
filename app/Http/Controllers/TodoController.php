<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //

    function add_income_head(Request $request){

        $request->validate([
            'name'=>'required|min:3|unique:todos',
            'description'=>'required|min:3|unique:todos'
        ]);


        Todo::updateOrInsert([

            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect('/about');
    }
}
