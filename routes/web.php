<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserCrateAndSensmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\ClassController;
use App\Models\Classes;
use App\Http\Controllers\ClassTimeTableController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[DemoController::class,'HOME']);

Route::get('/about',[DemoController::class,'about']);
Route::post('/todo',[TodoController::class,'add_income_head']);

Route::resource('office', OfficeController::class);
Route::post('/addoffice', [OfficeController::class,'store']);
Route::post('/edit',[OfficeController::class,'updatedf']);
Route::get('/userCreated',[UserCrateAndSensmail::class,'index']);
Route::get('/check', function () {
    // $class= \App\Models\Classes::find(2);
    // $scetion=\App\Models\Sections::all();
    // $class->sections()->detach($scetion);
    // $scetion=[1,2];
    // $class->sections()->sync($scetion);
    $classData=Classes::with(['sections'])->get();
    dd($classData);
    return view('school.class.index',$classData);

});

Route::resource('section', SectionsController::class);
Route::resource('class', ClassController::class);
Route::post('class-time-table/search', [ClassTimeTableController::class,'search'])->name('Search');;
Route::resource('class-time-table', ClassTimeTableController::class);
Route::get('/addClasseTimeTable', function () {
    dd("comes");
});


