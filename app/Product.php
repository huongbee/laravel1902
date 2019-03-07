<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function pageUrl(){
        return $this->belongsTo('App\PageUrl','id_url','id');  
        //id: other key 
    }
}
