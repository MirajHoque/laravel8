<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//provide an object oriented way that is used for obatain a instance of current HTTP request via dependency injection

class UsersController extends Controller
{
    function getData(Request $req){ //Request(class) $req(obj)
        $req->validate([
            'userName'=>'required | max:10',
            'password'=>'required | min:8'
        ]);
        return $req->input();
    }
}
