<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
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
Route::get('logIn', function(){
    if( session()->has('user') ){
        return redirect('profile');
    }
    return view('logIn');
});
Route::post('user', [UserAuth::class, 'UserLogIn']);
Route::view('profile', 'profile');

Route::get('logOut', function(){
    if( session()->has('user') ){ //has boolean method, return true if session value exist
        session()->pull('user');
    }
    return redirect('logIn');
});