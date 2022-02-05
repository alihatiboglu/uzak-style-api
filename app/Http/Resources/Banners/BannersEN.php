<?php

namespace App\Http\Resources\Banners;

use Illuminate\Http\Resources\Json\JsonResource;

class BannersEN extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return [

            'id' => $this->id,
            'title' => $this->title_en,
            'description' => $this->description_en,
            'image' => $this->image,
            'link' => $this->link,
        ];



    }
}
