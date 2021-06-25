<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

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

    function search($name){
        //return Device::where("name", $name)->get();
        
        //as like query
        return Device::where("name", "like", "%".$name."%")->get();
    }

    function testData(Request $req){
        $rules= array(
            "member_id"=>"required| min:2| max:4"
        );

        $validation=Validator::make($req->all(), $rules);
        if($validation->fails())
        {
            return response()->json($validation->errors(),401);
        }
        else
        {
            return $this->add($req);
        }
        
    }
    
}
