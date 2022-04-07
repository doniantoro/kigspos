@extends('layouts.pos-master')
@section('title')
    <title>Transaction Success</title>
@endsection

@section('content')

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="row" style="padding: 20px">
                        <div class="col-md-9">
                            <h2>Transaksi Sukses</h2>
                            <h6>Rincian Transaksi</h6>
                        </div>
                        <div class="col-md-3">
                            <h2 style="text-align: right">Invoice #{{date('Ymd', strtotime($transaction->created_at))}}{{sprintf("%04d", $transaction->id)}}</h2>
                            <h5 style="text-align: right">{{$transaction->created_at->format('d-m-Y')}}</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div style="text-align: center; padding: 30px;">
                                    <h3 style="text-align: center">Klik Tombol dibawah untuk Print Invoice dan Sertifikat</div>
                            </div>
                            
                            <div class="col-md-4 offset-4" style="text-align: center; padding-bottom: 40px;">
                                <a target="_blank" href="/pos/pdf/invoice/{{$transaction->id}}" class="btn btn-primary"
                                    onclick="window.open('{{Request::root()}}/pos/pdf/invoice/{{$transaction->id}}', 
                                    'newwindow', 
                                    'width=800,height=850'); 
                                    return false;"
                                        ><i class="fa fa-print"></i> 
                                        Print Invoice</a>
                                <a target="_blank" href="/pos/pdf/invoice/{{$transaction->id}}" class="btn btn-success">
                                    <i class="fa fa-print"></i> Print Sertifikat</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@slot('footer')        
@endslot
@endsection