<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();

    	return view('categories.index', compact('categories'));
    }


    public function products($id)
    {
    	$category = Category::find($id);
    	$products = Product::where('category_id', $id)->get();

    	return view('products.category_index', compact(['products', 'category']));
    }
}
