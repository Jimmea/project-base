<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    // Base shop
    Route::resource('departments', 'AdminDepartmentController');
    Route::resource('products', 'AdminProductController');
    Route::resource('attributes', 'AdminAttributeController');
    Route::resource('attributes_value', 'AdminAttributeValueController');
    Route::resource('orders', 'AdminOrderController');
    Route::resource('orders_detail', 'AdminOrderDetailController');

    // Base new
    Route::resource('news', 'AdminNewsController');

    // Comment
    Route::resource('comments', 'AdminCommentsController');

    // Support
    Route::resource('tags', 'AdminTagController');
    Route::resource('statistics', 'AdminStatisticController');



    // Base admin
    Route::resource('categories', 'AdminCategoryController');
    Route::resource('banners', 'AdminBannerController');
    Route::resource('statics', 'AdminStaticController');
    Route::resource('settings', 'AdminSettingController');
    Route::resource('accounts', 'AdminAccountController');
});
