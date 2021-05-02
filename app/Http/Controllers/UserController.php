<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function index(){
        //return "Api data here";
        $apiJsonData= Http::get('https://reqres.in/api/users?page=1');
        return view('users', ['collection'=>$apiJsonData['data']]);
    }
}
