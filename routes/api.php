<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('add', [DeviceController:: class, 'add']);
Route::put('update', [DeviceController::class, 'update']);
Route::delete('delete/{id}', [DeviceController::class, 'delete']);
Route::get('search/{name}', [DeviceController::class, 'search']);
Route::post('save', [DeviceController::class, 'testData']);
Route::apiResource('member', MemberController::class);