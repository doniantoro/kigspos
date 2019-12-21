<?php
/*
    Author      : Doni Antoro

    Desc        : This is a route file for Supplier controller
    Controller  : app/Controllers/supllier.php

    
*/

Route::get('/supplier', 'SupplierController@index');

//Add supplier
Route::get('/supplier/add', 'SupplierController@add');
Route::get('/supplier/add_procces', 'SupplierController@add_procces');

//update supplier
Route::get('/supplier/update/{id}', 'SupplierController@update');
Route::get('/supplier/update_procces/{id}', 'SupplierController@update_procces');

//delete supplier
Route::get('/supplier/delete/{id}', 'SupplierController@delete');