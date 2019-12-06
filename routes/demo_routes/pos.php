<?php
/*
    Author      : Gilang Prambudi

    Desc        : This is a route file for Point of Sale feature.
    Controller  : app/Controllers/POSController.php

    
*/


Route::prefix('pos')->group(function(){
    Route::get('/', 'POSController@getIndex');
    Route::post('/success', 'POSController@successfulTransactionPage');
});

Route::resource('/categories', 'CategoryController')->except([
    'create', 'show'
]);

Route::get('/dashboard', 'DashboardController@index');
// Route::resource('/dashboard', 'DashboardController')->except([
//     'create', 'show'
// ]);

Route::resource('/produk', 'InventoryController')->except([
    'create', 'show'
]);

Route::get('/transaksi', 'ReportingController@index');

Route::put('/categories/{id}/edit', 'CategoryController@update');