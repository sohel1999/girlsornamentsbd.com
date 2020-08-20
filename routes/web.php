<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/login', 'AuthController@index')->name('auth.index');
    Route::post('/register', 'AuthController@store')->name('auth.register');
    Route::get('/verified/{token}', 'AuthController@verified')->name('auth.verified');
    Route::get('/shop', 'ShopController@index')->name('shop.index');
    Route::get('/products/{id}','ShopController@show')->name('shop.show');
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::get('/cart/{id}/remove', 'CartController@remove')->name('cart.remove');
    Route::post('/cart/{id}/update', 'CartController@update')->name('cart.update');
    Route::get('/cart/{id}/delete', 'CartController@delete')->name('cart.delete');
    Route::get('/cart/clear', 'CartController@clear')->name('cart.clear');
    Route::get('/add-to-cart/{productId}', 'CartController@addToCart')->name('addToCart');
    Route::get('/cart/update/{productId}', 'CartController@update')->name('cart.update');
    Route::get('checkout', 'OrderController@create')->name('checkout');
    Route::post('order/store', 'OrderController@store')->name('frontend.orders.create');
    Route::post('/payment/success', 'PaymentController@success')->name('payment.success');
    Route::get('/payment/failed', 'PaymentController@fail')->name('payment.failed');
    Route::get('/payment/cancel', 'PaymentController@cancel')->name('payment.cancel');
    Route::post('ipn', 'PaymentController@ipn')->name('payment.ipn');
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
