<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Property;

use DB;
class pagesController extends Controller
{
    public function getHome(){
        $properties = Property::all();
        $count = DB::table('properties')->count(DB::raw('DISTINCT title'));
        return view('pages.home',compact('properties','count'));
    }
}
