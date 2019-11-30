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