<?php


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'customer'], function () {
 Route::get('index', ['as' => 'customer.index', 'uses' => 'CustomerController@index']);
 Route::get('create', ['as' => 'customer.create', 'uses' => 'CustomerController@create']);
 Route::post('store', ['as' => 'customer.store', 'uses' => 'CustomerController@store']);
});

Route::group(['prefix' => 'order'], function () {
 Route::get('index', ['as' => 'order.index', 'uses' => 'OrderController@index']);
 Route::get('create/{customer}', ['as' => 'order.create', 'uses' => 'OrderController@create']);
});
