<style>
        @page { size: 21cm 14.85cm; margin: 1cm; padding: 0 }
        h1{
            padding: 0;
            margin: 0;
        }
    
        .item-table thead td{
            background-color: #22a6b3;
            padding: 4px;
            font-size: 12px;
            color: #fff;
        }
    
        .item-table tbody td{
            padding-right: 5px;
            padding-left: 5px;
    
        }
    
    
        table {
            border-collapse: collapse;
        }
    
        .item-table td, .item-table tr{
            padding: 0;
            margin: 0;
            border-collapse: collapse;
      border-spacing: 0;
        }
    </style>
    <div>
        <table style="width: 100%; border-collapse: collapse;
        border-spacing: 0;" cellpadding="0" cellspacing="0">
            <tr>
                <td style="vertical-align: top">
                    <h1>Elegant & Co.</h1>
                    <h5>
                        Menlo Park. CA<br>
                        1454
                    </h5>
    
                    <p>
                        Transaction Date : Jan, 27 2020
                    </p>
                </td>
    
                <td style="text-align: right;">
                    <h2>Invoice #{{$transaction->id}}</h2>
                    <h6 style="font-weight: 300">Printed date : {{\Carbon\Carbon::now()->format('d/m/yy h:m:s') }} </h6>
                </td>
            </tr>
    
            <tr>
                <table width="100%" class="item-table">
                    <thead>
                    <tr>
                        <td style="width: 30px;">No</td>
                        <td style="width: 75%">Item</td>
                        <td>Harga</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction->sales as $key=>$sale)
                        <tr style="padding: 0; margin: 0" class="item-row">
                            <td style="padding: 0; margin: 0; font-size: 10">{{$key+1}}</td>
                            <td style="padding: 0; margin: 0">
                                <h6 style="padding: 0; margin: 0; font-weight: 200">{{$sale->goods['name']}}</h6>
                            </td>
                            <td style="font-size: 10px">
                                Rp {{number_format($sale->goods['price'], 2, '.', '.')}}
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
                    <tr>
                        <td style="text-align: right; font-size: 10px; padding-top: 30px;" colspan="2">Total</td>
                                <td style="font-size: 10px; padding-top: 30px;">Rp {{number_format($transaction['price_total'], 2, '.', '.')}}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right; font-size: 10px" colspan="2">PPN</td><td style="font-size: 10px;">Rp -</td>
                    </tr>
                    <tr>
                        <td style="text-align: right; font-size: 10px" colspan="2">Total + PPN</td><td style="font-size: 10px;">Rp {{number_format($transaction['price_total'], 2, '.', '.')}}</td>
                    </tr>
                </table>
            </tr>
        </table>
        <div style="position: absolute; bottom: 0; border-top: 1px dashed black; width: 100%">
        </div>
    </div>
