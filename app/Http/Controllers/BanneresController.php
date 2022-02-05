<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Http\Resources\Banners\BannersAR;
use App\Http\Resources\Banners\BannersEN;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class BanneresController extends Controller
{
   use ApiResponses;

    public function banners_ar()
    {
        $categories = BannersAR::collection( Banner::all()->where('status','=','1'));
        return $this->querySuccess($categories);
    }

    public function banners_en()
    {
        $categories = BannersEN::collection( Banner::all()->where('status','=','1'));
        return $this->querySuccess($categories);
    }


}
