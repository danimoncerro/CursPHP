<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City2;

class City2Controller extends Controller
{
 	public function index(){
 		$cities2 = City2::all();
 		return view('cities2.index', compact('cities2'));
 	} 

}