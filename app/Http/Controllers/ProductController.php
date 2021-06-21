<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Device;
use App\Models\Product;

class ProductController extends Controller
{
    function list(){
       //using query builder
        // return DB::connection('mysql2')->table('products')->get();

        //usin model
       // return Device::all();

       //for product table
       return Product::all();
    }
}
