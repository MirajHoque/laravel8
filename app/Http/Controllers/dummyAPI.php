<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData(){
        return ["name"=>"Miraj", "email"=>"a.h.miraj2031@gmail.com", "address"=>"Dhaka"];
    }
}
