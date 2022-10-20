<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

/* Requist */

//
Route::get('/index', function () {
    return view('form');
});
Route::any("Request",[Controller::class,"index"]);


// Request with id
Route::get('/personForm', function () {
    return view('personForm');
});

Route::any("Person/{id}",[Controller::class,"findId"]);



// Request all
Route::any("/route",function(Request $request){
    return $input = $request->input();
});


