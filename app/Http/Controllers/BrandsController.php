<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Resources\Brands\BrandAR;
use App\Http\Resources\Brands\BrandEN;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    use ApiResponses;

    public function brands_ar()
    {
        $brands = BrandAR::collection( Brand::all()->where('status','=','1'));
        return $this->querySuccess($brands);
    }

    public function brands_en()
    {
        $brands = BrandEN::collection(Brand::all()->where('status','=','1'));
        return $this->querySuccess($brands);
    }
}
