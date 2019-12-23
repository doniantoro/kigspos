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
                            <a href="/produk/manual_input">
                            <button type="button" class="btn btn-info btn-min-width mr-1 mb-1"><i class="fa fa-plus-circle"></i> Tambah Produk</button></a>
                            <button type="button" class="btn btn-info btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#importExcel">IMPORT EXCEL</button>
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
                               
                               <!-- Show data goods which is in -->
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
                                            <th>Supplier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1;?>
                                        @foreach($goods as $good)
                                        <tr>
                                        <th scope="row"><?php echo $i ?></th>                       
                                        <td>{{$good->sku}}</td>
                                            <td>{{$good->name}}</td>              
                                            <td>{{$good->goodscategory->name}}</td>
                                            <td>{{$good->goodssubcategory->name}}</td>
                                            <td>{{$good->weight}}</td>
                                            <td>{{$good->karat}}</td>
                                            <td>{{number_format($good->price,0, ',' , '.')}}</td> 
                                            <td>{{$good->supplier->name}}</td>
                                         </tr><?php $i++;?>
                                         
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>


     
    <!-- Import Excel -->
    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/InventoryProduct/input_excell" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">

							{{ csrf_field() }}

							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
</body>
@endsection