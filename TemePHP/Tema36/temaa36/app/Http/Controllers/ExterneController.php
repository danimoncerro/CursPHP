<?php

namespace App\Http\Controllers;
use App\Externe;
use Illuminate\Http\Request;

class ExterneController extends Controller {
	public function index(){
		$externe = Externe::all();
		return view('externe', compact('externe'));
	}
}
