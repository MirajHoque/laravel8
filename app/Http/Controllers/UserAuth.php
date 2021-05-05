<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userLogIn(Request $req){
        $data= $req->all();
        $req->session()->put('user', $data['userName']);
        return redirect('profile');
       //echo session('user'); //access session
        //session(): used for access session
        //put('sessionVariable', 'sessionData'): used for store data into session

    }
}
