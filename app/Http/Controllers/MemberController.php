<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function index(){
        $member= new Member;
        $member->name="Miraj";
        $member->email="a.h.miraj2031@gmail.com";
        $member->address="Dhaka";
        $member->save();
    }
}
