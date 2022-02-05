<?php

namespace App\Http\Resources\Banners;

use Illuminate\Http\Resources\Json\JsonResource;

class BannersAR extends JsonResource
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
            'title' => $this->title_ar,
            'description' => $this->description_ar,
            'image' => $this->image,
            'link' => $this->link,

        ];
    }
}
