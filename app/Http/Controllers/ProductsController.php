<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\productAR;
use App\Http\Resources\Product\productEN;
use App\Product;

use Illuminate\Http\Request;
use App\Traits\ApiResponses;

class ProductsController extends Controller
{
    use ApiResponses;

    public function product_ar()
    {
        $products = productAR::collection(Product::all()->where('status', '=', '1'));
        return $this->querySuccess($products);
    }

    public function product_en()
    {
        $products = productEN::collection(Product::all()->where('status', '=', '1'));
        return $this->querySuccess($products);
    }

    public function product_by_category_ar($category)
    {
        $product = Product::all()->where('status', '=', '1')
            ->where('category_id', '=', $category);
        if ($product->isEmpty()) {
            return $this->sendError("Not Found", 404);
        } else {
            $products = productAR::collection($product);
            return $this->querySuccess($products);
        }
    }

    public function product_by_category_en($category)
    {

        $product = Product::all()->where('status', '=', '1')
            ->where('category_id', '=', $category);
        if ($product->isEmpty()) {
            return $this->sendError("Not Found", 404);
        } else {

            $products = productEN::collection($product);
            return $this->querySuccess($products);
        }
    }

    public function product_detail_en($id)
    {

        $product = Product::all()->where('status', '=', '1')
            ->where('id', '=', $id);
        if ($product->isEmpty()) {
            return $this->sendError("Not Found", 404);
        } else {

            $products = productEN::collection($product);
            return $this->querySuccess($products);
        }
    }

    public function product_detail_ar($id)
    {

        $product = Product::all()->where('status', '=', '1')
            ->where('id', '=', $id);
        if ($product->isEmpty()) {
            return $this->sendError("Not Found", 404);
        } else {

            $products = productAR::collection($product);
            return $this->querySuccess($products);
        }
    }

    public function product_by_filter_ar(Request $request)
    {

        if ($request->has('color') && $request->has('size')) {
            Product::with('colors')->with('attribute')->with('images');
            $product = Product::whereHas
            (
                'attribute', function ($query) use ($request) {
                $query->where('size', '=', $request->get('size'));
            })
                ->where(function ($subQuery) use ($request) {
                    $subQuery->whereHas('colors', function ($query) use ($request) {
                        $query->where('color', '=', $request->get('color'));
                    });
                })
                ->where('status', '=', '1')
                ->orwhere('product_color', '=', $request->get('color'))
                ->where('category_id', '=', $request->get('category'))->get();
            if ($product->isEmpty()) {
                return $this->sendError("Not Found", 404);
            } else {
                $products = productAR::collection($product);
                return $this->querySuccess($products);
            }

        }
        elseif ($request->has('size')) {
            Product::with('colors')->with('attribute')->with('images');
            $product = Product::whereHas
            (
                'attribute', function ($query) use ($request) {
                $query->where('size', '=', $request->get('size'));
            })

                ->where('status', '=', '1')

                ->where('category_id', '=', $request->get('category'))->get();
            if ($product->isEmpty()) {
                return $this->sendError("Not Found", 404);
            } else {
                $products = productAR::collection($product);
                return $this->querySuccess($products);
            }

        }
        elseif ($request->has('color')) {

            if ($request->has('color') && $request->has('size')) {

                $product = Product::whereHas
                (
                    'colors', function ($query) use ($request) {
                    $query->where('color', '=', $request->get('color'));
                })->where('status', '=', '1')
                    ->orwhere('product_color', '=', $request->get('color'))
                    ->where('category_id', '=', $request->get('category'))->get();
                if ($product->isEmpty()) {
                    return $this->sendError("Not Found", 404);
                } else {
                    $products = productAR::collection($product);
                    return $this->querySuccess($products);
                }

            }


        }


    }

    public function product_by_filter_en(Request $request)
    {

        if ($request->has('color') && $request->has('size')) {
            Product::with('colors')->with('attribute')->with('images');
            $product = Product::whereHas
            (
                'attribute', function ($query) use ($request) {
                $query->where('size', '=', $request->get('size'));
            })
                ->where(function ($subQuery) use ($request) {
                    $subQuery->whereHas('colors', function ($query) use ($request) {
                        $query->where('color', '=', $request->get('color'));
                    });
                })
                ->where('status', '=', '1')
                ->orwhere('product_color', '=', $request->get('color'))
                ->where('category_id', '=', $request->get('category'))->get();
            if ($product->isEmpty()) {
                return $this->sendError("Not Found", 404);
            } else {
                $products = productEN::collection($product);
                return $this->querySuccess($products);
            }

        }
        elseif ($request->has('size')) {
            Product::with('colors')->with('attribute')->with('images');
            $product = Product::whereHas
            (
                'attribute', function ($query) use ($request) {
                $query->where('size', '=', $request->get('size'));
            })

                ->where('status', '=', '1')

                ->where('category_id', '=', $request->get('category'))->get();
            if ($product->isEmpty()) {
                return $this->sendError("Not Found", 404);
            } else {
                $products = productEN::collection($product);
                return $this->querySuccess($products);
            }

        }
        elseif ($request->has('color')) {

            if ($request->has('color') && $request->has('size')) {

                $product = Product::whereHas
                (
                    'colors', function ($query) use ($request) {
                    $query->where('color', '=', $request->get('color'));
                })->where('status', '=', '1')
                    ->orwhere('product_color', '=', $request->get('color'))
                    ->where('category_id', '=', $request->get('category'))->get();
                if ($product->isEmpty()) {
                    return $this->sendError("Not Found", 404);
                } else {
                    $products = productEN::collection($product);
                    return $this->querySuccess($products);
                }

            }


        }


    }



}
