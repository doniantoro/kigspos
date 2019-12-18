<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Sales;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Transaction;

class ReportingController extends Controller
{
    public function index(){
        $transaction = Transaction::all();
        return view('report.index', ['transaction' => $transaction]);
    }

    public function sales(){
        $sales = Sales::all();
        return view('report.sales', ['sales' => $sales]);
    }

}
