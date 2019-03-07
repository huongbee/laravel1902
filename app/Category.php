<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $talbe = 'categories';

    function products(){
        return $this->hasMany('App\Product','id_type','id');
        //id : local key
    }
}
