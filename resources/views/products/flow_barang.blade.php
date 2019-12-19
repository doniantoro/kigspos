@extends('layouts.master')

@section('title')
    <title>Produk</title>
@endsection

@section('content')
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
    <div class="content-body">
            <section id="multi-column">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <button type="button" class="btn btn-info btn-min-width mr-1 mb-1"><i class="fa fa-plus-circle"></i> Tambah Produk</button> -->
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
                              <center>  <h3 style="font-size:40px;">Flow barang</h3></center>
                                <div class="row">
                                    <form action="/produk/flow_barang" method="get">
                                        <input type="date" name="from" class="ml-2 mb-2">-
                                        <input type="date" name="to">
                                        <button type="submit">submit</button>
                                    </form>
                                </div>
                                <table class="table table-striped table-bordered multi-ordering">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>SKU</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Permata</th>
                                            <th>Berat</th>
                                            <th>Kadar</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;?>
                                        @foreach($goods as $good)
                                        <tr>
                                            <th scope="row"><?php echo $i ?></th>
                                            <td>{{$good->goods->sku}}</td>
                                            <td>{{$good->goods['name']}}</td>
                                            <td>{{$good->goods['goodscategory']['name']}}</td>
                                            <td>{{$good->goods['goodssubcategory']['name']}}</td>
                                            <td>{{$good->goods['weight']}}</td>
                                            <td>{{$good->goods['karat']}}</td>
                                            <td>{{$good->goods['price']}}</td>
                                            <td>{{$good->goods_status->status}}</td>
                                            </tr>
                                        <?php $i=$i+1;?>
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
        </div>

</body>
@endsection