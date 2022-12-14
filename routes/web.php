<?php

/*
    ===========================================================
            Admin Routes
    ===========================================================
*/

// authentication
Auth::routes();

Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/home', 'AdminController@dashboard')->name('home');
Route::get('/user', 'AdminController@user')->name('user');
Route::get('/profile', 'AdminController@profile')->name('profile');

Route::get('/category', 'AdminController@category')->name('category');
Route::get('/group', 'AdminController@group')->name('group');
Route::get('/author', 'AdminController@author')->name('author');
Route::get('/publication', 'AdminController@publication')->name('admin.publication');
Route::get('/products', 'AdminController@product')->name('product');


Route::get('todays/orders/', 'OrderController@index')->name('todays.orders');
Route::post('update/orders/{id}', 'OrderController@update')->name('admin.order.update');
Route::get('manage/order/{id}', 'OrderController@manageOrder')->name('manage.order');
Route::get('delete/order/item/{id}', 'OrderController@deleteOrderItem')->name('delete.order.item');

/*
    ===========================================================
            Public routes for cart
    ===========================================================
*/

Route::prefix('carts')->group(function() {
  Route::get('/', 'ProductCartController@index')->name('cart.index');
  Route::get('/{id}', 'ProductCartController@create')->name('cart.create');
  Route::get('/remove/{id}', 'ProductCartController@removeCartItem')->name('carts.remove.item');
  Route::get('/delete/all', 'ProductCartController@destroyAllCart')->name('carts.destroy.all');
  Route::post('/update', 'ProductCartController@updateCart')->name('carts.update');
});

Route::get('/product-shipping', 'ProductShippingController@productShipping')->name('home.shipping.product');
Route::post('/product-shipping', 'ProductShippingController@cartShipping')->name('home.shipping.cart');
Route::get('/payment-checkout', 'ProductShippingController@productCheckout')->name('payment.checkout');

Route::post('/order-submit', 'ProductShippingController@orderSubmit')->name('order.submit');
Route::get('/order/invoice/{id}', 'ProductShippingController@orderInvoice')->name('order.invoice');


Route::get('/', 'PagesController@index'); //   public home page
Route::post('/{search?}', 'PagesController@index')->name('home'); //   public home page
Route::prefix('home')->group(function() {
  Route::get('/', 'PagesController@index')->name('home'); //   public home page
  Route::get('/by-category/{id}', 'PagesController@productByCategory')->name('productByCategory'); //   public home page
  Route::get('/by-group/{id}', 'PagesController@productByGroup')->name('productByGroup'); //   public home page
  Route::get('/view-product/{id}', 'PagesController@show')->name('single.help');
  Route::get('/writer/{id}', 'PagesController@writer')->name('writer');
  Route::get('/all-writer', 'PagesController@all_writer')->name('writer.list');
  Route::get('/all-publication', 'PagesController@all_publication');
  Route::get('/publication/{id}', 'PagesController@publication')->name('publication');
  Route::get('/novel', 'PagesController@novel')->name('novel');
  Route::get('/islamic', 'PagesController@islamic')->name('islamic');
  Route::get('/bestseller', 'PagesController@bestseller')->name('bestseller');
  Route::get('/contact', 'PagesController@contact')->name('contact');
  Route::get('/about-us', 'PagesController@about_us')->name('about-us');
});


// Contact Using Mail

Route::post('send', 'SendingMailController@send')->name('send');
Route::get('email', 'SendingMailController@email');
