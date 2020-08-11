<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/login', 'AuthController@index')->name('auth.index');
    Route::post('/register', 'AuthController@store')->name('auth.register');
    Route::get('/verified/{token}', 'AuthController@verified')->name('auth.verified');
    Route::get('/shop', 'ShopController@index')->name('shop.index');
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::get('/add-to-cart/{productId}', 'CartController@addToCart')->name('addToCart');
    Route::get('/cart/update/{productId}', 'CartController@update')->name('cart.update');
    Route::get('checkout', 'OrderController@index')->name('checkout');
    Route::get('/payment/success', function () {

    })->name('payment.success');
    Route::get('/payment/failed', function () {
    })->name('payment.failed');
    Route::get('/payment/cancel', function () {
    })->name('payment.cancel');
});

Route::group(['namespace' => 'Backend', 'prefix' => 'dashboard'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/login', 'AuthController@index')->name('login.index');
        Route::post('/login', 'AuthController@loginProcess')->name('login.process');
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', 'AuthController@logout')->name('logout');
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('categories', 'CategoryController');
        Route::resource('brands', 'BrandController');
        Route::resource('products', 'ProductController');
        Route::resource('users', 'UserController');
        Route::resource('orders', 'OrderController');
        Route::resource('sliders', 'SliderController');
        Route::get('orders/{status}/change/{id}', 'OrderController@updateStatus')->name('change.status');
    });
});
