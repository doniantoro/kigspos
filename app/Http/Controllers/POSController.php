<?php
/*
    Author      : Gilang Prambudi

    Desc        : This is a controller file for Point of Sale feature.
     
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSController extends Controller
{

    /*
        Point of Sale index page.

        Route   : /pos/
        Method  : GET

    */
    function getIndex(){
        echo "THIS IS INDEX";
    }

    



    function successfulTransactionPage(){
        echo "THIS IS PAGE";
    }
}
