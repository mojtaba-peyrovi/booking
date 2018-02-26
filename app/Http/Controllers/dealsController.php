<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Deal;
use App\Property;
use Illuminate\Database\Query\Builder;
use DB;

class dealsController extends Controller
{
    public function getIndex(){
        $deals = Deal::orderBy('created_at','desc')->paginate(5);
        return view('deals.index', compact('deals'));

    }

    public function getCreate(){
        $properties = Property::all();
        return view('deals.create', ['properties' => $properties]);
    }

    public function postCreate(Request $request){
        $aa = $request->input('property_title');
        $prop_id = Property::where('title', $aa)->first()->id;
        Deal::create([
            'property_id' => $prop_id,
            'price' => request('price')
        ]);
        return redirect()->route('deals.index');

    }
}
