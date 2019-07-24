<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

    ===========================================================
            Admin Routes
    ===========================================================
*/

// authentication
Auth::routes();

Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/home', 'AdminController@dashboard')->name('home');
Route::get('/user', 'AdminController@user')->name('user');
Route::get('/profile', 'AdminController@profile')->name('profile');

Route::get('/category', 'AdminController@category')->name('category');
Route::get('/group', 'AdminController@group')->name('group');
Route::get('/author', 'AdminController@author')->name('author');
Route::get('/publication', 'AdminController@publication')->name('admin.publication');
Route::get('/products', 'AdminController@product')->name('product');

/*
    ===========================================================
            Public routes
    ===========================================================
*/


Route::get('/add-to-cart', 'ProductController@getCart')->name('product.shoppingCart');
Route::get('/remove-all-cart', 'ProductController@removeAllCart')->name('product.removeAllCart');
Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');
Route::post('/remove-from-cart', 'ProductController@removeFromCart')->name('product.removeFromCart');
Route::post('/update-cart', 'ProductController@updateCart')->name('product.updateCart');
Route::get('/product-shipping', 'ProductController@productShipping')->name('home.shipping.product');
Route::post('/product-shipping', 'ProductController@cartShipping')->name('home.shipping.cart');
Route::get('/product-checkout', 'ProductController@productCheckout')->name('home.checkout.product');


Route::get('/', 'PagesController@index')->name('home'); //   public home page
// Route::post('/{search?}', 'PagesController@index')->name('home'); //   public home page
Route::prefix('home')->group(function() {
  Route::get('/by-category/{id}', 'PagesController@productByCategory')->name('productByCategory'); //   public home page
  Route::get('/by-group/{id}', 'PagesController@productByGroup')->name('productByGroup'); //   public home page
  Route::get('/view-product/{id}', 'PagesController@singleProduct')->name('single.help');
  Route::get('/writer/{id}', 'PagesController@writer')->name('writer');
  Route::get('/all-writer', 'PagesController@all_writer');
  Route::get('/all-publication', 'PagesController@all_publication');
  Route::get('/publication/{id}', 'PagesController@publication')->name('publication');
  Route::get('/novel', 'PagesController@novel')->name('novel');
  Route::get('/islamic', 'PagesController@islamic')->name('islamic');
  Route::get('/bestseller', 'PagesController@bestseller')->name('bestseller');
  Route::get('/contact', 'PagesController@contact')->name('contact');
  Route::get('/about-us', 'PagesController@about_us')->name('about-us');
  //Route::get('{path}', "HomeController@index")->where('path', '/^[a-z0-9]([0-9a-z_-\s])+$/i');
});


// Contact Using Mail

Route::post('send', 'SendingMailController@send')->name('send');
Route::get('email', 'SendingMailController@email');