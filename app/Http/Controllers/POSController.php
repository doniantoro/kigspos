<?php
/*
    Author      : Gilang Prambudi

    Desc        : This is a controller file for Point of Sale feature.
     
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods;
use App\Transaction;
use App\Sales;

class POSController extends Controller
{

    /*
        Point of Sale index page.

        Route   : /pos/
        Method  : GET

    */
    function getIndex()
    {
        echo "THIS IS INDEX";
    }


    function successfulTransactionPage()
    {
        echo "THIS IS PAGE";
    }


    /*
        Retrieve all product in db

        Route   : /pos/product
        Method  : GET


    */
    function getProducts()
    {
        $goods = Goods::all();

        return json_encode($goods);
    }


    /*
        Point of Sale index page.

        Route   : /pos/search
        Param   : sku
                  id
        Method  : GET

    */
    function searchProduct(Request $req)
    {
        $sku = $req->get('sku');
        $id  = $req->get('id');

        if ($sku != null) {
            $product = Goods::where('sku', $sku)->with('GoodsCategory', 'GoodsSubCategory')->first();
            return $product;
        }
    }


    /*
        Method to create transaction

        Route   : /pos/create-transaction
        Param   : price_total
                  user_id
                  customer_name
        Method  : POST

    */
    function createTransacation(Request $req)
    {
        $transaction = new Transaction();
        $transaction->price_total = $req->get('price_total');
        $transaction->user_id = 1; //Still hardcoded
        $transaction->customer_name = $req->get('customer_name');
        $transaction->save();
        return json_encode($transaction);
    }



    /*
        Method to insert data into Sales

        Route   : /pos/create-sales
        Param   : transaction_id
                  goods_id
        Method  : POST

    */
    function createSales(Request $req)
    {
        $sales = new Sales();
        $sales->transaction_id = $req->get('transaction_id');
        $sales->goods_id = $req->get('goods_id');
        $sales->save();
        return json_encode($sales);
    }

    function test(Request $req)
    {
        return $req->get('param');
    }

    
     /*
        Method to show invoice and certificate

        Route   : /pos/transaction/{transaction_id}
        Method  : GET
    */
    function showTransaction(Request $req){
        $transaction = Transaction::where('id', $req->get('transaction_id'))->with('sales', 'sales.goods')->first();
        return view('pos.showTransactionSuccess', ['transaction' => $transaction]);
    }


    function showInvoicePDF($transaction_id, Request $req){
        $transaction = Transaction::where('id', $transaction_id)->with('sales', 'sales.goods')->first();

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('pos.pdf.invoice', ['transaction' => $transaction]);

        return $pdf->stream();
    }

    /*
        Method to show invoice and certificate

        Route   :
        Method  : POST
    */
    function showInvoice(Request $req)
    {
        $transaction = Transaction::find($req->get('transaction_id'));
        return json_encode($transaction);
    }



    function showInvoiceDummy()
    {
        $data['invoice_number'] = "1003111";
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('pdf_template.invoice', $data);
        return $pdf->stream();
    }
}
