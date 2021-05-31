<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    function dbOperations(){
        //retrive date
        //return DB::table('members')->where('address',"dhaka")->get();
       
        //find date
        // return (array) DB::table('members')->find(4);
       
        //count data
        //return DB::table('members')->count();

       //insert
      
      /* return DB::table('members')->insert(
           [
               'name'=> "Zahra Tahfim",
               'email'=> "tahfim@gmail.com",
               'address'=> "Chittagong"
           ]
           );
      */
      
      //update

      /*
      return DB::table('members')->where('id',20)->update(
          [
            'name'=> "Jannatul Zahra"
          ]);
      */
      
      //delete
      return DB::table('members')->where('id',20)->delete();
    }
}
