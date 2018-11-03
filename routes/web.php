<?php

//Route::get('/product/{id}', 'ProductDetailController@showProduct')->name('get.product.detail');
//Route::get('/cart', 'CartDetailController@getCart')->name('get.cart.list');
//Route::post('/cart/add', 'CartDetailController@postCartProduct')->name('post.cart.add');
//Route::get('/cart/delete', 'CartDetailController@deleteCartProduct')->name('get.cart.delete');
//Route::post('/cart/execute', 'CartDetailController@postCartExecute')->name('post.cart.execute');
//Route::get('/cart/product/buy', 'CartDetailController@saveProductNowOrLater')->name('get.cart.product.buy');
//Route::get('/{id?}', 'CataLogController@getList')->name('get.product.list');

Route::group(['middle'=> 'web', 'namespace' => 'Frontend'], function () {
    Route::get('/{any?}', 'SwitchController@anyview')->where('any', '.*');
});