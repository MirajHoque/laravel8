<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MemberController extends Controller
{
    function list(){
        $data= Member::all();
        return view('list', ['members'=> $data]);
    }

    function delete($id){
        $data= Member::find($id);
        $data->delete();
        return redirect('list');

    }
    function showData($id){
        $data= Member::find($id);
        return view('edit', ['member'=> $data]);

    }
    function update(Request $req){
        //return $req->input();
        $data= Member::find($req->id);
        $data->name= $req->name;
        $data->email= $req->email;
        $data->address= $req->address;
        $data->save();
        return redirect('list');
    }
}
