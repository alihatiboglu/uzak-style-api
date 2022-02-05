<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'UserController@login');
Route::get('login', 'UserController@login_get');
Route::post('register', 'UserController@register');
Route::get('register', 'UserController@create');

// categories
Route::get('category/ar', 'CategoriesController@CategoryAR');
Route::get('category/en', 'CategoriesController@CategoryEN');
Route::get('category/ar/{id}', 'CategoriesController@CategoryARbyparent');
Route::get('category/en/{id}', 'CategoriesController@CategoryENbyparent');
// end of categories routing

// Get Countries
Route::get('countries', 'CountriesController@index');

// Get Banners
Route::get('banners/ar', 'BanneresController@banners_ar');
Route::get('banners/en', 'BanneresController@banners_en');

// Get Brands
Route::get('brands/ar', 'BrandsController@brands_ar');
Route::get('brands/en', 'BrandsController@brands_en');

// Get Banners
Route::get('currency', 'CurrenciesController@index');

// Get Products
Route::get('products/ar', 'ProductsController@product_ar');
Route::get('products/en', 'ProductsController@product_en');

Route::get('products/together', 'ProductsTogethersController@products');

// filter
Route::get('products/ar/filter', 'ProductsController@product_by_filter_ar');
Route::get('products/en/filter', 'ProductsController@product_by_filter_en');

// products by category
Route::get('products/ar/category/{category}', 'ProductsController@product_by_category_ar');
Route::get('products/en/category/{category}', 'ProductsController@product_by_category_en');

// product detail
Route::get('products/ar/detail/{id}', 'ProductsController@product_detail_ar');
Route::get('products/en/detail/{id}', 'ProductsController@product_detail_en');


// start of auth
Route::group(['middleware' => 'auth:api'], function(){

    Route::post('user/update', 'UserController@update');
    Route::post('details', 'UserController@details');

});
// end of auth
