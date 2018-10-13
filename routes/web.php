<?php

Route::get('/product/{id}', 'ProductDetailController@showProduct')->name('get.product.detail');
Route::get('/cart', 'CartDetailController@getCart')->name('get.cart.list');
Route::post('/cart/add', 'CartDetailController@postCartProduct')->name('post.cart.add');
Route::get('/cart/delete', 'CartDetailController@deleteCartProduct')->name('get.cart.delete');
Route::post('/cart/update_quantity', 'CartDetailController@updateCartQtyProduct')->name('post.cart.update_quantity');
Route::get('/cart/product/buy', 'CartDetailController@saveProductNowOrLater')->name('get.cart.product.buy');
Route::get('/{id?}', 'CataLogController@getList')->name('get.product.list');
