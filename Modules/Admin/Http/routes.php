<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::resource('categories', 'AdminCategoryController');
    Route::resource('departments', 'AdminDepartmentController');
    Route::resource('products', 'AdminProductController');
    Route::resource('attributes', 'AdminAttributeController');
    Route::resource('attributes_value', 'AdminAttributeValueController');
});
