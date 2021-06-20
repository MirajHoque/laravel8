<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
$data="hi, let's learn laravel8";
/*

$data=Str::ucfirst($data); //captailize first letter
$data= Str::replaceFirst('Hi', 'Hello', $data); //replace 
$data= Str::camel($data); //camel case
echo $data;

*/

$value= Str::of($data)
        ->ucfirst($data)
        ->replaceFirst('Hi', 'Hello', $data)
        ->camel($data);

echo $value;

Route::get('/', function () {
    return view('welcome');
});
