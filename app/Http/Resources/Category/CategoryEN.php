<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryEN extends JsonResource
{

    /**
     * Transform the resource collection into an array.
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
            'top_category' => $this->top_category,
            'parent_id' => $this->parent_id,
        ];
    }

}
