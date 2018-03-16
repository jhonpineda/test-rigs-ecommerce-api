<?php

Route::prefix('v1')->group(function() {
    Route::prefix('products')->group(function() {
        Route::post('/', 'ProductsController@create');
        Route::get('{id}', 'ProductsController@readById');
        Route::put('{id}', 'ProductsController@update');
        Route::put('{id}/likes', 'ProductsController@likes');
        Route::delete('{id}', 'ProductsController@delete');
    });
});
