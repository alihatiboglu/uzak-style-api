<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsTogether extends Model
{
    protected $table ='products_togethers';

    public function product_one(){

        return $this->hasOne('App\Product','id','product1_id');
    } public function product_2(){

        return $this->hasOne('App\Product','id','product2_id');
    }


}
