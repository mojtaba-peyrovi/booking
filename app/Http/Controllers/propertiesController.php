<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Property;

use Session;

use Auth;

class propertiesController extends Controller
{
    public function getIndex(){
        $properties = Property::orderBy('created_at','desc')->paginate(5);
        return view('properties.index',['properties' => $properties]);
    }
    public function getCreate(){
        return view('properties.create');
    }
    public function getShow($id){
        $property = Property::find($id);
        return view('properties.show',['property' => $property]);
    }
    public function postProperties(Request $request){
        Property::create([
            'user_id' => Auth::user()->id,
            'title' => request('title'),
            'type'=> request('type'),
            'country' => request('country'),
            'city' => request('city'),
            'creditCardNeeded' => request('creditCardNeeded'),
            'badge1' => request('badge1'),
            'badge2' => request('badge2'),
            'badge3' => request('badge3'),
            'badge4' => request('badge4'),
            'parking' => request('parking'),
            'balcony' => request('balcony'),
            'bathroom' => request('bathroom'),
            'airportShuttle' => request('shuttle'),
            'about' => request('about'),
            'rooms' => request('rooms')

        ]);

        Session::flash('success','property added successfully!');

        return redirect()->route('properties.index');
    }
}
