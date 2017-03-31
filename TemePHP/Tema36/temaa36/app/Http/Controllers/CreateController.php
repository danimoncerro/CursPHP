<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{

	public function notDeveloped() {
    	return view('pages.not_developed');
	}
}