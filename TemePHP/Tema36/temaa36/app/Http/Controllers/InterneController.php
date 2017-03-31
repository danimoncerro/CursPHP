<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Interne;

class InterneController extends Controller {
	public function index(){
		$interne = Interne::all();
		return view('interne', compact('interne'));
	}
}