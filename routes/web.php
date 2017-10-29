<?php

Auth::routes();

Route::get('/', [
    'uses' => 'SitesController@index',
]);

Route::get('/products', [
    'uses' => 'SitesController@index',
    'as' => 'sites.index'
]);


Route::get('/logout', [
    'uses' => 'UserController@logout',
    'as' => 'sites.logout'
]);

Route::get('/products/add-to-cart/{id}', [
    'uses' => 'SitesController@addToCart',
    'as' => 'sites.addToCart'
]);

Route::get('/cart', [
    'uses' => 'SitesController@cart',
    'as' => 'sites.cart'
]);

Route::get('/products/add', [
    'uses' => 'SitesController@getAddProduct',
    'as' => 'sites.getAddProduct'
]);

Route::post('/products/add', [
    'uses' => 'SitesController@postAddProduct',
    'as' => 'sites.postAddProduct'
]);

/*
Route::get('/', [
    'uses' => 'SitesController@index',
    'as' => 'sites.index'
]);


Route::get('/logout', [
    'uses' => 'SitesController@logout',
    'as' => 'sites.logout'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'SitesController@addToCart',
    'as' => 'sites.addToCart'
]);

Route::get('/cart', [
    'uses' => 'SitesController@cart',
    'as' => 'sites.cart'
]);

Route::get('/add-product', [
    'uses' => 'SitesController@getAddProduct',
    'as' => 'sites.getAddProduct'
]);

Route::post('/add-product', [
    'uses' => 'SitesController@postAddProduct',
    'as' => 'sites.postAddProduct'
]);
*/



