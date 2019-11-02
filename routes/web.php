<?php


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'customer'], function () {
 Route::get('index', ['as' => 'customer.index', 'uses' => 'CustomerController@index']);
 Route::get('create', ['as' => 'customer.create', 'uses' => 'CustomerController@create']);
 Route::post('store', ['as' => 'customer.store', 'uses' => 'CustomerController@store']);
});
