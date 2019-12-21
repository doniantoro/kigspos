<?php

//Create different route file for each feature inside /routes/demo_routes folder
//Create the route with the feature name
//Include the route here
include('demo_routes/pos.php');
include('demo_routes/category.php');
include('demo_routes/inventory.php');
include('demo_routes/supplier.php');

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
    return view('welcome');
//    return view('dashboard/index');
});


