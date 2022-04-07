@extends('layouts.master')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
    <body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
      <div class="content-body">
        <!-- Sales stats -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                    <div class="pb-1">
                                        <div class="clearfix mb-1">
                                            <i class="icon-star font-large-1 blue-grey float-left mt-1"></i>
                                            <span class="font-large-2 text-bold-300 info float-right">5,879</span>
                                        </div>
                                        <div class="clearfix">
                                            <span class="text-muted">Total Products</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-0" style="height: 7px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                    <div class="pb-1">
                                        <div class="clearfix mb-1">
                                            <i class="icon-user font-large-1 blue-grey float-left mt-1"></i>
                                            <span class="font-large-2 text-bold-300 danger float-right">423</span>
                                        </div>
                                        <div class="clearfix">
                                            <span class="text-muted">Total Orders</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-0" style="height: 7px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Sales stats -->
        
        
        <!-- Recent Orders -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Orders</h4>
                        <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- <p>Total paid invoices 240, unpaid 150. <span class="float-right"><a href="project-summary.html" target="_blank">Invoice Summary <i class="ft-arrow-right"></i></a></span></p> -->
                        </div>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-hover mb-0">
                            
                            <thead>
                                    <tr>
                                        <th>Invoice#</th>
                                        <th>Customer Name</th>
                                        <th>Sales</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                    <tr>
                                        <td class="text-truncate"><a href="pos/invoice/?transaction_id={{$transaction->id}}".>{{date('Ymd', strtotime($transaction->created_at))}}{{sprintf("%04d", $transaction->id)}}</a></td>
                                        <td class="text-truncate">{{$transaction->customer_name}}</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-success">{{$transaction->name}}</span></td>
                                        <td class="text-truncate">Rp.{{number_format($transaction->price_total,'0','.', '.')}}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <div class="float-right mb-2 mt-1">{{ $transactions->links() }}</div>
	                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Recent Orders -->
        
                </div>
              </div>
            </div>

            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    </body>

    
    @slot('footer')
        
    @endslot
@endsection
