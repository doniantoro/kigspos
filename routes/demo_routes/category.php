<?php


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