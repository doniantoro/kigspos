<?php
/*
    Author      : Doni Antoro

    Desc        : This is a route file for Invenory Controller
    Controller  : app/Controllers/InventoryController.php

    
*/

Route::get('/produk/manual_input', 'InventoryController@manual_input');
Route::get('/produk/manual_input_proses', 'InventoryController@manual_input_proses');
Route::post('/InventoryProduct/input_excell', 'InventoryController@input_excell');


//goods_stock
Route::get('produk/goods_stock', 'InventoryController@goods_stock');
Route::get('produk/update_stock/{sku}', 'InventoryController@update_stock');
Route::get('produk/delete_stock/{sku}', 'InventoryController@delete_stock');
Route::get('produk/return_stock/{sku}', 'InventoryController@return_stock');
Route::get('/produk/update_stock_proses/{sku}', 'InventoryController@update_stock_proses');



//flow barang
Route::get('produk/flow_barang', 'InventoryController@flow_barang');
