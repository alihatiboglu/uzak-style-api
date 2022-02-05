<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function attribute(){

        return $this->hasMany('App\ProductAttributes','product_id');
    }

    public function colors(){

        return $this->hasMany('App\ProductColor','product_id');
    }
    public function images(){

        return $this->hasMany('App\ProductImage','product_id');
    }

}
