<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;


class DashboardController extends Controller
{
    public function index() {


    
        $transactions=DB::table('transaction')
            ->join('user', 'transaction.user_id', '=', 'user.id')
            ->select('transaction.*', 'user.name')
            ->paginate(10);   
            
        return view('dashboard.index',['transactions'=>$transactions]);



    }
}
