<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Deal;

class dealsController extends Controller
{
    public function getIndex(){
        $deals = Deal::all();
        return view('deals.index', ['deals' => $deals]);
    }
}
