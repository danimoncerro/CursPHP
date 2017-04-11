<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index(){
    	$cities = City::all();
    	return view('cities.index', compact('cities'));
    }
}
