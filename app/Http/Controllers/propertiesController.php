<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Property;

class propertiesController extends Controller
{
    public function getIndex(){
        $properties = Property::all();
        return view('properties.index',['properties' => $properties]);
    }
}
