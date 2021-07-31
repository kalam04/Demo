<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data=[
            'classData'=>Classes::with(['sections'])->get(),
        ];

        return view('school.class.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=[
            'sectionData'=>Sections::all(),
        ];
        return view('school.class.create',$data);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $class =new Classes();
        $class->name=$request->class_name;
        $class->save();
        $id= Classes::all()->last()->id;
        $class=Classes::find($id);
        $s=array_keys($request->sections);
        $class->sections()->sync($s);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=[
            'classData'=>Classes::where('id',$id)->with(['sections'])->first(),
            'sectionData'=>Sections::all(),
        ];

        return view('school.class.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $class =Classes::find($id);
        $class->name=$request->class_name;
        $class->update();
        $class= Classes::find($id);
        $scetion=array_keys($request->sections);
        $class->sections()->sync($scetion);
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $class=Classes::find($id);
        $class->sections()->detach();
        $class->delete();
        return back();
    }
}
