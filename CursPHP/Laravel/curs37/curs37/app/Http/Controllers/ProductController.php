<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all(); // returneaza toate produsele	

    	// compact('products')   este echivalent cu [ 'products' => $products ]
    	// se trimite variabila products catre view: resource/views/products/index.blade.php
    	return view('products.index', compact('products'));

    }
}
