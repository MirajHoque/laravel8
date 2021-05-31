<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    function dbOperations(){
        //sum
        //return DB::table('members')->sum('id');

        //average
        //return DB::table('members')->avg('id');

        //max
        //return DB::table('members')->max('id');

        //min
        //return DB::table('members')->min('id');

        //count
        return DB::table('members')->count('id');
    }
}
