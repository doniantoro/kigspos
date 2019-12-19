<?php
/*
    Author      : Gilang Prambudi

    Desc        : This is a route file for Point of Sale feature.
    Controller  : app/Controllers/POSController.php

    
*/
Route::prefix('pos')->group(function(){
    Route::get('/', function(){
        return view('pos.index');
    });
    Route::post('/success', 'POSController@successfulTransactionPage');


    Route::get('/product', 'POSController@getProducts');
    Route::get('/product/search', 'POSController@searchProduct');


    Route::post('/create-transaction', 'POSController@createTransacation');
    Route::post('/create-sales', 'POSController@createSales');

    Route::post('/invoice', 'POSController@showInvoice');
    
    Route::post('/test', 'POSController@test');

    Route::get('/transaksi', 'ReportingController@index');


});

