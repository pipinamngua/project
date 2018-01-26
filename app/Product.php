<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function image() {
    	return $this->hasMany('App\Image');
    }

    public function configPhone()
    {
    	return $this->hasOne('App\ConfigsPhone');
    }

    public function configLaptop()
    {
    	return $this->hasOne('App\ConfigsLaptop');
    }

    public function configTivi()
    {
    	return $this->hasOne('App\ConfigsTivi');
    }
}
/**
* 
*/