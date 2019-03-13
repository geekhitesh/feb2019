<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Discount;
use App\Product;
use App\ProductCategory;
use App\Order;
use App\User;
use App\OrderProduct;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('url','controller-function');


Route::get('/greet','GreetController@simpleGreet');
Route::get('/greet/{name}-{city}','GreetController@bestGreet');
Route::get('/greet/{name}','GreetController@advancedGreet');

Route::get('/user/create','UserController@create');
Route::post('/user/store','UserController@store');
Route::get('/user/show/{id}','UserController@show');
Route::post('/user/update','UserController@update');

//Route::get('/user/list','UserController@getUserList');

Route::get('/user/listview','UserController@listView');


Route::get('user/edit',function () {

	return view('user.update');

});



Route::get('/ecommerce/test',function() {

 	//return ProductCategory::all();

 	//return Product::all();

 	//get all products belong to shoes category

 	//return ProductCategory::find(1001);

 	/*$productcategory = ProductCategory::find(1001);

 	$products = $productcategory->product;

 	return $products;*/


 	/*$user = User::find(1);

    $orders = $user->order;

    return $orders;*/

    /*$order = Order::find(1001);

    $user = $order->user;
    return $user;*/

    $order = Order::find(1001);

    $products = $order->product;
    return $products;

})->middleware('key_auth');


Route::group(['middleware' => ['key_auth']], function () {
    //
    Route::get('/user/list','UserController@getUserList');
});



Route::group(['middleware' => ['auth']], function () {
    //
    Route::get('/user/list','UserController@getUserList');
});


// this->middelware('key_auth'); // inside controller constructor

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
