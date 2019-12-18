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
                                <h3>Stock barang</h3>
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
                                            <th>kondisi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;?>
                                        @foreach($goods as $good)
                                        <tr>
                                            <th scope="row"><?php echo $i ?></th>
                                            <td>{{$good->sku}}</td>
                                            {{-- <td>{{$good->name}}</td>
                                            <td>{{$good->category_name}}</td>
                                            <td>{{$good->subcategory_name}}</td> --}}
                                            <td>{{$good->weight}}</td>
                                            <td>{{$good->karat}}</td>
                                            <td>{{$good->price}}</td> 
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        konidisi
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <button class="dropdown-item" type="button"><a href="/produk/delete_stock/{{$good->sku}}"onclick="javascript: return confirm('Anda yakin hapus ?')">Hapus</a> </button>
                                                        <button class="dropdown-item" type="button"><a href="/produk/return_stock/{{$good->sku}}"onclick="javascript: return confirm('Anda yakin Return ?')">Return</a></button>
                                                        <button class="dropdown-item" type="button"><a href="/produk/update_stock/{{$good->id}}">update</a> </button>
                                                    </div>
                                                </div>
                                            </td>         
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