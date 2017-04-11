<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County1 extends Model
{
    protected $table = 'counties1';

    public function cities1() {
    	return $this->hasMany('App\City1');
    }
}
