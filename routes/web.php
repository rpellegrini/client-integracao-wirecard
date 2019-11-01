<?php


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'customer'], function () {
 Route::get('index', ['as' => 'customer.create', 'uses' => 'CustomerController@index']);
});
