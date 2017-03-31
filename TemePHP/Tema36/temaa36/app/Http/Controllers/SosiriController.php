<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sosiri;

class SosiriController extends Controller {
	public function index(){
		$sosiri = Sosiri::all();
		return view('sosiri', compact('sosiri'));
	}
}



