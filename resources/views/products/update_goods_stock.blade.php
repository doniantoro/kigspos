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
                                <center><h1>Update Produk</h1></center></br>
                                @foreach($goods as $good)
                                <form action="/produk/update_stock_pross/{{$good->id}}" method="get">
                                   {{ csrf_field() }}
                                    <div id="form-body">
                                        <div id="form_add">
                                            <div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label for="name">Name</label>
                                                    <input name="name" class="form-control" value="{{$good->name}}" id="name" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="sku">Sku</label>
                                                    <input name="sku" class="form-control" value="{{$good->sku}}" id="sku"required>
                                                </div>
                                            </div>                                        
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="kategory">Kategory</label>
                                                    <select name="category_id" id="kategory" class="form-control"required>
                                                        <option value=""selected>pilih</option>
                                                            <!-- Looping category -->
                                                            @foreach($category as $categories)
                                                            <option value="{{$categories->id}}"@if($categories->id==$good->category_id){{'selected'}} @endif>{{$categories->name}}</option>
                                                            @endforeach 
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="permata">Permata</label>
                                                    <select name="subcategory_id" id="permata" class="form-control"required>
                                                        <option value=""selected>pilih</option>
                                                        <!-- Looping subcategory -->
                                                            @foreach($sub_category as $sub_categories)
                                                            <option value="{{$sub_categories->id}}"@if($sub_categories->id==$good->subcategory_id){{'selected'}} @endif>{{$sub_categories->name}}</option>
                                                            @endforeach 
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="supplier">Supplier</label>
                                                    <select name="supplier" id="supplier" class="form-control"required>
                                                        <option value=""selected>pilih</option>
                                                        <!-- Looping supplier -->
                                                        @foreach($supplier as $suppliers)
                                                        <option value="{{$suppliers->id}}" @if($suppliers->id==$good->supplier_id){{'selected'}} @endif>{{$suppliers->name}}</option>
                                                        @endforeach 
                                                    </select>
                                                </div>    
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                <label for="berat">Berat</label>
                                                <input name="weight" onkeypress="return hanyaAngka(event)"value="{{$good->weight}}" class="form-control" id="berat" required>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="karat">Karat</label>
                                                <input name="karat"onkeypress="return hanyaAngka(event)" value="{{$good->karat}}" class="form-control" id="karat" required>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="harga">Harga</label>
                                                <input name="price"onkeypress="return hanyaAngka(event)" value="{{ $good->price }}" class="form-control" id="harga" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>

        <!-- Function to add coloum input -->
        <script type="text/javascript">
        //function to only type angka
        function hanyaAngka(evt) 
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                 return false;
                  return true;
        }

    </script>

    
</body>
@endsection