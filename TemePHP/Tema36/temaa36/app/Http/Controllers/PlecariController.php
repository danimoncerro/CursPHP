<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plecari;

class PlecariController extends Controller
{
    //
    public function index(){
    	$plecari = Plecari::all();
    	return view('plecari', compact('plecari'));
    }

}




