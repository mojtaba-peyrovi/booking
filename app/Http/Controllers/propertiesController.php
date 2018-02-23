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
    public function getCreate(){
        return view('properties.create');
    }
    public function getShow($id){
        $property = Property::find($id);
        return view('properties.show',['property' => $property]);
    }
}
