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
                                <center><h3>Tambah Supplier</h3></center></br></br>
                                <!-- Form input -->
                                <form action="/supplier/add_procces" method="get">
                                    <div class="container px-4 ">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                                            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
                                            <input type="text" name="addres" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
                                            <input type="text" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                    <center><button type="submit" class="btn btn-secondary">Submit</button></center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
                       

     
</body>
@endsection