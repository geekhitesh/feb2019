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

Route::get('/', function () {
    return view('welcome');
});


//Route::get('url','controller-function');


Route::get('/greet','GreetController@simpleGreet');
Route::get('/greet/{name}-{city}','GreetController@bestGreet');
Route::get('/greet/{name}','GreetController@advancedGreet');


