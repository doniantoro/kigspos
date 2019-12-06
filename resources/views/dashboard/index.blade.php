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
                            <p>Total paid invoices 240, unpaid 150. <span class="float-right"><a href="project-summary.html" target="_blank">Invoice Summary <i class="ft-arrow-right"></i></a></span></p>
                        </div>
                        <div class="table-responsive">
                            <table id="recent-orders" class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>SKU</th>
                                        <th>Invoice#</th>
                                        <th>Customer Name</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-truncate">PO-10521</td>
                                        <td class="text-truncate"><a href="#">INV-001001</a></td>
                                        <td class="text-truncate">Elizabeth W.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                        <td class="text-truncate">$ 1200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">PO-532521</td>
                                        <td class="text-truncate"><a href="#">INV-01112</a></td>
                                        <td class="text-truncate">Doris R.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                        <td class="text-truncate">$ 5685.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">PO-05521</td>
                                        <td class="text-truncate"><a href="#">INV-001012</a></td>
                                        <td class="text-truncate">Andrew D.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                        <td class="text-truncate">$ 152.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">PO-15521</td>
                                        <td class="text-truncate"><a href="#">INV-001401</a></td>
                                        <td class="text-truncate">Megan S.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                        <td class="text-truncate">$ 1450.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">PO-32521</td>
                                        <td class="text-truncate"><a href="#">INV-008101</a></td>
                                        <td class="text-truncate">Walter R.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                        <td class="text-truncate">$ 685.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Recent Orders -->
        
                </div>
              </div>
            </div>
    </body>
    @slot('footer')
        
    @endslot
@endsection
