<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// La plural numele functiei pt ca o categories poate sa aiba mai multe produse
    public function products() 
    {
    	return  $this->hasMany('App\Product');
    }
}
