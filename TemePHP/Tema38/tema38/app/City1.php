<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City1 extends Model
{
    protected $table = 'cities1';

    public function county1(){
    	return $this->belongsTo('App\County1');
    }
}