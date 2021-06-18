<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function index(){
        return Member::find(1)->getCompany; //-> dynamic property
        //dynamic property allows to access method as property
    }
}
