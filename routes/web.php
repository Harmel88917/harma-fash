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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','Auth\loginController@logout');

//routes for adding to cart functionality
Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);
Route::resource('cart', 'CartController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');
Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');

//routes for contact functionality
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', 'ContactUSController@contactUSPost');

//checkout functionality
Route::get('checkout', 'CheckoutController@checkout');
Route::post('checkout', 'CheckoutController@checkoutPost');
