<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\ProductTogether;
use App\Product;
use App\ProductsTogether;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class ProductsTogethersController extends Controller
{
    use ApiResponses;

    public function products()
    {


        $product = ProductTogether::collection(
            ProductsTogether::with('product_one')
                ->with('product_2')
                ->get()
        );
        return $this->querySuccess($product);
    }

}
