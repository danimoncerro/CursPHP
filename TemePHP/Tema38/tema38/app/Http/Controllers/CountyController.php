<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\County;
use App\City;

class CountyController extends Controller
{
    public function index(){
    	$counties = County::all();
    	return view('counties.index', compact('counties'));
    }

    public function cities($id) {
    	$county = County::find($id);
    	$cities = City::where('county_id', $id)->get();

    	return view('cities.county_index', compact(['cities', 'county']));
    }
}