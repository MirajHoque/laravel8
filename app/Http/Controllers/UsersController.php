<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function viewLoad(){
        $data=['Mita','Miraj','Mila'];
       // return view('users',['registerdUsers'=>['Mita','Miraj','Mila']]); -> for count method
       //return view('users',['userName'=>'Miraj']); ->for conditional statement
       return view('users',['registeredUsers'=>$data]);
    }
}
