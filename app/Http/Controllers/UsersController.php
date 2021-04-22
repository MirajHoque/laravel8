<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function loadView($userName){
        return view('users',['userName'=>$userName]);
    }
}
