<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function add(Request $req){
        $device= new Device;
        $device->name= $req->name;
        $device->member_id= $req->member_id;
        $result= $device->save();
        if($result)
        {
            return ["Result"=>"Data has been saved"];
        }
        
        else
        {
            return ["Result"=>"Operation failed"];
        }
    }
    function update(Request $req){
        $device= Device::find($req->id);
        $device->name= $req->name;
        $device->member_id= $req->member_id;
        $result= $device->save();
        if($result)
        {
            return ["Result"=>"Data has been updated"];
        }
        
        else
        {
            return ["Result"=>"Update operation failed"];
        }
    }
    function delete($id){
        $device= Device::find($id);
        $result= $device->delete();
        if($result)
        {
            return ["Result"=>"Data has been deleted"];
        }
        else
        {
            return ["Result"=>"Delete operationn failed"];
        }
    }
    
}
