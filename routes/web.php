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
    //return view('user');
    return redirect('about');
});

/* 
Route::get('/', function () { ->here / is url 
    return view('user'); ->here (user) is page
*/

/*
Route::get('/about', function() {
    return view('about');
});
*/
Route::view('about', 'about');
Route::view('contact', 'contact');

//pass and get data from url

Route::get('/{name}', function ($name) {
    return view('hello',['username'=>$name]);
    
});
