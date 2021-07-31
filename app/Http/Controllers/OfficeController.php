<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Facade\FlareClient\Time\Time;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=[
            'office'=>Office::all(),
            'title'=>'Fees Master List'
        ];
        return view("office.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("office.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        // dd($request->all());

        $office = new Office();

        $office->office_name=$request->of;
        $office->office_address=$request->ofAdd;

        if ($request->image_file != null) {
            $fileName = time() . '.' . $request->image_file->extension();
            $request->image_file->move(public_path('Image'), $fileName);
            $office->image = $fileName;
        }
        $office->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $data=Office::find($id);


        return view('office.edit', ['office_data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {



        $office=Office::find($request->id);


        $office->office_name=$request->of;
        $office->office_address=$request->ofAdd;
        if ($request->attach_document != null) {
            $fileName = time() . '.' . $request->attach_document->extension();
            $request->attach_document->move(public_path('addExpenseDocument'), $fileName);
            $office->attach_document = $fileName;
        }
        $office->update();


        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $office=Office::find($request->id);
        $office->office_name=$request->of;
        $office->office_address=$request->ofAdd;
        if ($request->image_file != null) {
            $destination='Image/'.$office->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $fileName = time() . '.' . $request->image_file->extension();
            $request->image_file->move(public_path('Image'), $fileName);
            $office->image = $fileName;
        }
        $office->update();


        return back();
    }

    public function updatedf(Request $request){



        $office=Office::find($request->id);


        $office->office_name=$request->of;
        $office->office_address=$request->ofAdd;
        if ($request->image_file != null) {


            $destination='Image/'.$office->image;

            if(File::exists($destination)){
                File::delete($destination);
            }

            $fileName = time() . '.' . $request->image_file->extension();
            $request->image_file->move(public_path('Image'), $fileName);
            $office->image = $fileName;
        }
        $office->update();


        return back();



    }
}
