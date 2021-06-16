<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function setNameAttribute($value){
        $this->attributes['name']= "Mr". $value;
    }
    public function setAddressAttribbute($value){
        $this->attributes['address']= $value. "Bangladesh";
    }
}
