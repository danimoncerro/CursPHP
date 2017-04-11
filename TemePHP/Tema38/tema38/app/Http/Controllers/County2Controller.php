<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\County2;
use App\City2;

class County2Controller extends Controller
{
    public function index(){
    	$counties2 = County2::all();
    	return view('counties2.index', compact('counties2'));
    }

    public function cities2($id){
    	$county2 = County2::find($id);
    	$cities2 = City2::where('county2_id', $id)->get();
    	return view('cities2.county2_index', compact(['cities2', 'county2']));
    }
}
