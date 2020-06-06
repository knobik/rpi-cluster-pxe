<?php

// unprotected
Route::group(['prefix' => 'provision'], function () {
    Route::get('/script', 'ProvisionController@script');
    Route::post('/register', 'ProvisionController@register');
});

Route::group(['prefix' => 'auth'], function () {
    Auth::routes([
        'register' => false,
        'verify' => false,
    ]);
});

// protected

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('nodes', 'NodeController');
//    Route::group(['prefix' => 'node'], function () {
//        Route::get('/', 'NodeController@index');
//    });
});



