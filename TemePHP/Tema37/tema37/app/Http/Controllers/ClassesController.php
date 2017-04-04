<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;

class ClassesController extends Controller
{
    public function index(){
    	$classes = Classes::all();
    	return view('classes', compact('classes'));
    }
}
