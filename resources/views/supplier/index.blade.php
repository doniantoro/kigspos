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
                            <a href="/supplier/add">
                                <button type="button" class="btn btn-info btn-min-width mr-1 mb-1"><i class="fa fa-plus-circle"></i> Tambah Supplier </button>
                            </a>
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
                                <h3>Supplier</h3>
                               
                               <!-- Show data goods which is in -->
                                <table class="table table-striped table-bordered multi-ordering">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Nama</th>
                                            <th>Phone</th>
                                            <th>Alamat</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1;?>
                                        @foreach($supplier as $suppliers)
                                        <tr>
                                        <th scope="row"><?php echo $i ?></th>                       
                                        <td>{{$suppliers->name}}</td>
                                        <td>{{$suppliers->phone}}</td>
                                        <td>{{$suppliers->addres}}</td>
                                        <td>
                                            <!-- Button if user wanna do update,delete and return goods -->
                                             <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        konidisi
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <button class="dropdown-item" type="button" ><a href="/supplier/update/{{$suppliers->id}}"></a> update </button>
                                                        <button class="dropdown-item" type="button"><a href='javascript:hapusData("{{$suppliers->id}}")'>Delete</a> </button>
                                                    </div>
                                            </div>
                                               
                                        </td>
                                         </tr><?php $i++;?>
                                         
                                         @endforeach

                                         <script language="JavaScript" type="text/javascript">
                                            //function if user wanna delete data
                                            function hapusData(id)
                                            {
                                                if (confirm("Apakah anda yakin akan menghapus data ini?"))
                                                {
                                                window.location.href = '/supplier/delete/' + id;
                                                }
                                            }
                                        </script>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
                       

     
</body>
@endsection