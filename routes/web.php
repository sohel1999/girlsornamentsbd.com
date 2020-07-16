<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Frontend'],function (){
    Route::get('/','HomeController@index')->name('home');
    Route::get('/login','AuthController@index')->name('auth.index');
    Route::post('/register','AuthController@store')->name('auth.register');
    Route::get('/verified/{token}','AuthController@verified')->name('auth.verified');
    Route::get('/shop','ShopController@index')->name('shop.index');
    Route::get('/cart','CartController@index')->name('cart.index');
});

Route::group(['namespace'=>'Backend','prefix'=>'dashboard'],function (){
   Route::group(['middleware' => 'guest'],function (){
       Route::get('/login','AuthController@index')->name('login.index');
       Route::post('/login','AuthController@loginProcess')->name('login.process');
   });
  Route::group(['middleware' => 'auth'],function (){
      Route::get('/logout','AuthController@logout')->name('logout');
      Route::get('/', 'DashboardController@index')->name('dashboard');
      Route::resource('categories','CategoryController');
      Route::resource('brands','BrandController');
      Route::resource('products','ProductController');
      Route::resource('users','UserController');
      Route::resource('orders','OrderController');
  });
});
