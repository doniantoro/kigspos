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
                                <h3>Laporan Penjualan</h3>
                                <table class="table table-striped table-bordered multi-ordering">
                                    <thead>
                                        <tr>
                                            <th>ID Penjualan</th>
                                            <th>ID Transaksi</th>
                                            <th>SKU</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Sub Kategori</th>
                                            <th>Berat</th>
                                            <th>Karat</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sales as $sales)
                                        <tr>
                                                <td>{{$sales->id}}</td>
                                                <td>{{$sales->transaction_id}}</td>
                                                <td>{{$sales->goods['sku']}}</td>
                                                <td>{{$sales->goods['name']}}</td>
                                                <td>{{$sales->goods->goodscategory['name']}}</td>
                                                <td>{{$sales->goods->goodssubcategory['name']}}</td>
                                                <td>{{$sales->goods['weight']}}</td>
                                                <td>{{$sales->goods['karat']}}</td>
                                                <td>{{$sales->goods['price']}}</td>
                                        </tr>
                                        @endforeach
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