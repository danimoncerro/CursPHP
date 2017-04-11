<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\County1;
use App\City1;

class County1Controller extends Controller
{
    public function index(){
    	$counties1 = County1::all();
    	return view('counties1.index', compact('counties1'));
    }

    public function cities1($id){
    	$county1 = County1::find($id);
    	$cities1 = City1::where('county1_id', $id)->get();
    	return view('cities1.county1_index', compact(['cities1', 'county1']));
    }
}