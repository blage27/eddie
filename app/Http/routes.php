<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/contact', 'PublicController@contact');
Route::get('/', 'PublicController@index');

Route::get('/autocomplete_brand', 'PublicController@autocompleteBrands');
Route::get('/autocomplete_model', 'PublicController@autocompleteModels');
Route::get('/request_fix', 'PublicController@requestFix');
Route::post('/submit_order_details', 'PublicController@submitOrder');
