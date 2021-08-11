<?php

namespace App\Http\Controllers;

use App\Models\ClassTimeTable;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassTimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[

            'subjects' =>Subject::all(),
            'teachers' => Teacher::all(),
        ];

        return view('school.classTimeTable.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $j= count($request->subject);
        $d=ClassTimeTable::where('class',$request->class)
        ->where('section',$request->section)
        ->where('subject_group',$request->subject_group)
        ->where('day',$request->day)->get();
        if($d->empty()){
            // $d->delete();
            $d=ClassTimeTable::where('class',$request->class)
            ->where('section',$request->section)
            ->where('subject_group',$request->subject_group)
            ->where('day',$request->day)->delete();
            for($i=0;$i<$j;$i++){
                $classTimeTable =new ClassTimeTable();
                $classTimeTable->class=$request->class;
                $classTimeTable->section=$request->section;
                $classTimeTable->subject_group=$request->subject_group;
                $classTimeTable->day=$request->day;
                $classTimeTable->subject=$request->subject[$i];
                $classTimeTable->teacher=$request->teacher[$i];
                $classTimeTable->time_form=$request->time_form[$i];
                $classTimeTable->time_to=$request->time_to[$i];
                $classTimeTable->room_no=$request->room_no[$i];
                $classTimeTable->save();
            }
            return back();
        }else{
            for($i=0;$i<$j;$i++){
                $classTimeTable =new ClassTimeTable();
                $classTimeTable->class=$request->class;
                $classTimeTable->section=$request->section;
                $classTimeTable->subject_group=$request->subject_group;
                $classTimeTable->day=$request->day;
                $classTimeTable->subject=$request->subject[$i];
                $classTimeTable->teacher=$request->teacher[$i];
                $classTimeTable->time_form=$request->time_form[$i];
                $classTimeTable->time_to=$request->time_to[$i];
                $classTimeTable->room_no=$request->room_no[$i];
                $classTimeTable->save();
            }
            return back();
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassTimeTable  $classTimeTable
     * @return \Illuminate\Http\Response
     */
    public function show(ClassTimeTable $classTimeTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassTimeTable  $classTimeTable
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassTimeTable $classTimeTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassTimeTable  $classTimeTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassTimeTable $classTimeTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassTimeTable  $classTimeTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassTimeTable $classTimeTable)
    {
        //
    }

    public function search(){
        $data=[

            'subjects' =>Subject::all(),
            'teachers' => Teacher::all(),
        ];

        return view('school.classTimeTable.search',$data);
    }

    
}
