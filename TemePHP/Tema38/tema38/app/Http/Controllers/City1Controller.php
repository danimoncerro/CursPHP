<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City1;

class City1Controller extends Controller
{
    public function index(){
    	$cities1 = City1::all();
    	return view('cities1.index', compact('cities1'));
    }
}

