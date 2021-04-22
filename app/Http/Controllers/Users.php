<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
   public function index($userName){
       //echo $userName;
        //echo "Hello from Users controller";
        return ["name=>miraj", "age=>25"];
    }
}
