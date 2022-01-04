<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks',function(){
    $data = App\Models\Task::all();
    return view('tasks')->with('tasks',$data);
});

Route::post('/tasks/saveTask','App\Http\Controllers\TaskController@store');

Route::get('/markascompleted/{id}','App\Http\Controllers\TaskController@UpdateTaskAsCompleted');

Route::get('/markasNotcompleted/{id}','App\Http\Controllers\TaskController@UpdateTaskAsNotCompleted');

Route::get('/Delete/{id}','App\Http\Controllers\TaskController@Deleted');

Route::get('/updateTask/{id}','App\Http\Controllers\TaskController@updatetaskview');

Route::post('/updatenewtask','App\Http\Controllers\TaskController@updatenewtask');