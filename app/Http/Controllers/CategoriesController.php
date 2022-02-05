<?php

namespace App\Http\Controllers;

use App\Http\Resources\Category\CategoryAR;
use App\Http\Resources\Category\CategoryEN;
use Illuminate\Http\Request;
use App\Category;
use App\Traits\ApiResponses;

class CategoriesController extends Controller
{
    use ApiResponses;

    public function CategoryAR()
    {
        $categories = CategoryAR::collection(Category::all());
        return $this->querySuccess($categories);

    }

    public function CategoryARbyparent($id)
    {
        $category = Category::all()->where('parent_id', '=', $id);
        if ($category->isEmpty()) {
            return $this->sendError("Not Found", 404);
        } else {
            $categories = CategoryAR::collection($category);
            return $this->querySuccess($categories);

        }

    }

    public function CategoryENbyparent($id)
    {

        $category = Category::all()->where('parent_id', '=', $id);
        if ($category->isEmpty()) {
            return $this->sendError("Not Found", 404);
        } else {
            $categories = CategoryEN::collection($category);
            return $this->querySuccess($categories);

        }


    }

    public function CategoryEN()
    {
        $categories = CategoryEN::collection(Category::all());
        return $this->querySuccess($categories);

    }

}
