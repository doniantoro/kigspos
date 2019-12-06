@extends('layouts.master')

@section('title')
    <title>Laporan</title>
@endsection

@section('content')
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
    <div class="content-body">
        <section id="multi-column">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-info btn-min-width mr-1 mb-1"><i class="fa fa-plus-circle"></i> Tambah Produk</button>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <h3>Manajemen Produk</h3>
                                    <table class="table table-striped table-bordered multi-ordering">
                                        <thead>
                                            <tr>
                                                <th>SKU</th>
                                                <th>Nama</th>
                                                <th>Kategori</th>
                                                <th>Permata</th>
                                                <th>Berat</th>
                                                <th>Kadar</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett</td>
                                                <td>Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>$170,750</td>
                                                <td>$170,750</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton</td>
                                                <td>Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>$86,000</td>
                                                <td>$86,000</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric</td>
                                                <td>Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>$433,060</td>
                                                <td>$433,060</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi</td>
                                                <td>Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>$162,700</td>
                                                <td>$162,700</td>
                                                <td>$162,700</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <!--/ Multi-column ordering table -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Smooth Area Chart</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <ul class="list-inline text-center">
                                    <li>
                                        <h6><i class="ft-circle grey lighten-1"></i> iPhone</h6>
                                    </li>
                                    <li>
                                        <h6><i class="ft-circle success"></i> Samsung</h6>
                                    </li>
                                </ul>
                                <div id="smooth-area-chart" class="height-350"></div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</body> 
@endsection