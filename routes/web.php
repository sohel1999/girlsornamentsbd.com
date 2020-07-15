<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Frontend'],function (){
    Route::get('/','HomeController@index')->name('home');
    Route::get('/login','AuthController@index')->name('auth.index');
    Route::get('/shop','ShopController@index')->name('shop.index');
    Route::get('/cart','CartController@index')->name('cart.index');
});

Route::group(['namespace'=>'Backend','prefix'=>'dashboard'],function (){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('categories','CategoryController');
    Route::resource('brands','BrandController');
    Route::resource('products','ProductController');
    Route::resource('users','UserController');
    Route::resource('orders','OrderController');
});
