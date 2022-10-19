<?php

use App\Http\Controllers\CrudController;
use GuzzleHttp\Psr7\Request;
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

/* ROUTION */

//Basic

Route::get('/', function () {
    return view('home');
});

//The Default Route Files

Route::get('/add', [CrudController::class, 'index']);

//Required Parameters

Route::get('/ab/{id}', function ($id) {
    return 'User '.$id;
});

//many route many parameters

Route::get('/posts/{post?}/comments/{comment?}', function ($post , $comment) {
    return "Your posts {$post} and this is your comments {$comment}";
});

//Parameters & Dependency Injection

Route::get('/user/{id}', function (Request $request, $id) {
    return  'User '.$id;
});

//Optional Parameters

Route::get('/users/{name?}', function ($name = null) {
    return 'Name'.$name;
});

Route::get('/User/{name?}', function ($name = 'John') {
    return $name;
});

//Regular Expression Constraints

Route::get('/category/{category}', function ($category) {
    return  $category;
})->whereIn('category', ['movie', 'song', 'painting']);

//CSRF Protection

Route::get('email', function(){
    return view('welcome');
});

