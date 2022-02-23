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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1',"namespace"=>"Api"], function () {
   Route::get('/apps',"shopsController@apps");

///////ajax get subcategories/////////////////////

Route::post('/subcats',"MainController@ajax_subcats");
///////ajax get subsubcategories/////////////////////

Route::post('/subcats2',"MainController@ajax_subcats2");
Route::post('/if_login',"MainController@if_login");
Route::get('/cart_num',"MainController@cart_num");



//
Route::get('/add_favorite',"MainController@add_favorite");
Route::get('/vendors',"MainController@vendors");

Route::get('/delete_favorite',"MainController@delete_favorite");
Route::get('/get_favorite',"MainController@get_favorite");

	
	
Route::get('/categories',"MainController@main");
Route::get('/items',"MainController@items");
Route::get('/get_carts',"MainController@get_carts");
Route::post('/add_carts',"MainController@add_carts");
Route::post('/add_carts_cart',"MainController@add_carts_cart");
Route::get('/delet_from_cart',"MainController@delet_from_cart");

Route::get('/get_governs',"MainController@get_governs");
Route::get('/get_governs_v2',"MainController@get_governs_v2");


Route::post('/add_orders',"MainController@add_orders");
	
Route::post('/check_orders',"MainController@check_orders");

Route::post('/my_orders',"MainController@my_orders");

Route::get('/home_products',"MainController@home_products");



//////////////////////////////////////////////////////


Route::post('/register',"ClientController@register");
Route::post('/login',"ClientController@login");
Route::post('/activation',"ClientController@activation");

Route::post('/send_code',"ClientController@resetPassword");

Route::post('/changPassword',"ClientController@changPassword");
Route::post('/edit_user',"ClientController@edit_user");

Route::post('/edit_pass',"ClientController@edit_pass");

Route::post('/edit_phone',"ClientController@edit_phone");
Route::post('/change_phone',"ClientController@change_phone");





    });
