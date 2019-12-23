<?php

//Create different route file for each feature inside /routes/demo_routes folder
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
//    return view('dashboard/index');
});

Route::group(['middleware' => ['auth']], function () {

//Create the route with the feature name
//Include the route here
    include('demo_routes/pos.php');
    include('demo_routes/category.php');

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
});

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
