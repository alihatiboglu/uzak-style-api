<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class productEN extends JsonResource
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
            'title' => $this->product_name_en,
            'description' => $this->description_en,
            'image' => $this->image,
            'price' => $this->price,
            'price_b_discount' => $this->price_b_discount,
            'product_code' => $this->product_code,
            'product_color' => $this->product_color,
            'feature_item' => $this->feature_item,
            'care' => $this->care_ar,
            'weight' => $this->weight,
            'colors' => $this->colors,
            'images' => $this->images,
            'attribute' => $this->attribute,
        ];
    }
}
