<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function index(Device $key){ //$key class type variable(class name D)
        return $key;
    }
}
