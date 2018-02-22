<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Property;
class pagesController extends Controller
{
    public function getHome(){
        $properties = Property::all();
        return view('pages.home',['properties'=>$properties]);
    }
}
