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
        $properties = Property::select('title')->distinct()->get();
        return view('deals.create', ['properties' => $properties]);
    }

    public function postCreate(Request $request){
        $title = $request->input('property_title');
        $prop_id = Property::where('title', $title)->first()->id;
        Deal::create([
            'property_id' => $prop_id,
            'price' => request('price')
        ]);
        return redirect()->route('deals.index');
    }
    public function getShow($id){
        $prop_id = DB::table('deals')->find($id)->property_id;

        $country = DB::table('properties')->find($prop_id)->country;
        $city = DB::table('properties')->find($prop_id)->city;

        $country_count = DB::table('properties')->where('country',$country)->count(DB::raw('DISTINCT title'));
        $city_count = DB::table('properties')->where('city',$city)->count(DB::raw('DISTINCT title'));

        $deal = Deal::find($id);
        return view('deals.show',compact('deal','country_count','city_count'));
    }
}
