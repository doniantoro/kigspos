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
                            @if ($message = Session::get('success'))
                            @foreach($message as $messager)
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>Data dengan Sku {{ $messager }} Sudah ada,sehingga tidak dapat di input</strong>
                            </div>
                            @endforeach
                            @endif
                                <center><h1>Input Produk</h1></center></br>
                                <form action="/produk/manual_input_proses" method="get">
                                {{ csrf_field() }}
                                <div id="form-body">
                                <div id="form_add">
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                        <label for="name">Name</label>
                                        <input name="name[]" class="form-control" id="name" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                        <label for="sku">Sku</label>
                                        <input name="sku[]" class="form-control" id="sku"required>
                                        </div>
                                        <div class="col-md-3 mt-2 mx">
                                        <button type="button" onclick="add_form()" class="btn btn-success">Tambah</button>
                                        </div>

                                    </div>
                                    
                                    <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="kategory">Kategory</label>
                                        <select name="category_id[]" id="kategory" class="form-control"required>
                                            <option value=""selected>pilih</option>
                                                <!-- Looping category -->
                                                @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->name}}</option>
                                                @endforeach 
                                        </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                        <label for="permata">Permata</label>
                                        <select name="subcategory_id[]" id="permata" class="form-control"required>
                                            <option value=""selected>pilih</option>
                                              <!-- Looping subcategory -->
                                                @foreach($sub_category as $sub_categories)
                                                <option value="{{$sub_categories->id}}">{{$sub_categories->name}}</option>
                                                @endforeach 
                                        </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                        <label for="supplier">Supplier</label>
                                        <select name="supplier[]" id="supplier" class="form-control"required>
                                            <option value=""selected>pilih</option>
                                            <!-- Looping supplier -->
                                            @foreach($supplier as $suppliers)
                                            <option value="{{$suppliers->id}}">{{$suppliers->name}}</option>
                                            @endforeach 
                                        </select>
                                        </div>
                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                        <label for="berat">Berat</label>
                                        <input name="weight[]" onkeypress="return hanyaAngka(event)" class="form-control" id="berat" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                        <label for="karat">Karat</label>
                                        <input name="karat[]"onkeypress="return hanyaAngka(event)" class="form-control" id="karat" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                        <label for="harga">Harga</label>
                                        <input name="price[]"onkeypress="return hanyaAngka(event)" class="form-control" id="harga" required>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                                    </form>



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

        //function to add form
        function add_form()
        {
            var html = '';
            
            html += '<br><br><hr size="30">';
         
            html += '<div id="form_add">';      
            html += '<div class="form-row">';
            html += '    <div class="form-group col-md-5">';
            html += '         <label for="name">Name</label>';
            html += '         <input name="name[]" class="form-control" id="name">';
            html += '     </div>';
            html += '     <div class="form-group col-md-4">';
            html += '          <label for="sku">Sku</label>';
            html += '          <input name="sku[]" class="form-control" id="sku">';
            html += '     </div>';
            html += '</div>';               
            html += '<div class="form-row">';
            html += '     <div class="form-group col-md-3">';
            html += '          <label for="kategory">Kategory</label>';
            html += '          <select name="category_id[]" id="kategory" class="form-control">';
            html += '                  <option value=""selected>pilih</option>';
            html += '                  @foreach($category as $categories)';
            html += '                  <option value="{{$categories->id}}">{{$categories->name}}</option>';
            html += '                  @endforeach';
            html += '          </select>';
            html += '     </div>';
            html += '     <div class="form-group col-md-3">';
            html += '          <label for="permata">Permata</label>';
            html += '          <select name="subcategory_id[]" id="permata" class="form-control">';
            html += '                  <option value=""selected>pilih</option>';
            html += '                   @foreach($sub_category as $sub_categories)';
            html += '                   <option value="{{$sub_categories->id}}">{{$sub_categories->name}}</option>';
            html += '                   @endforeach'; 
            html += '          </select>';
            html += '     </div>';
            html += '     <div class="form-group col-md-3">';
            html += '          <label for="supplier">Supplier</label>';
            html += '          <select name="supplier[]" id="supplier" class="form-control">';
            html += '                  <option value=""selected>pilih</option>';
            html += '                   @foreach($supplier as $suppliers)';
            html += '                   <option value="{{$suppliers->id}}">{{$suppliers->name}}</option>';
            html += '                   @endforeach';                    
            html += '          </select>';
            html += '     </div>';          
            html += '</div>';
            html += '<div class="form-row">';
            html += '     <div class="form-group col-md-3">';
            html += '          <label for="berat">Berat</label>';
            html += '          <input name="weight[]" class="form-control" id="berat">';
            html += '     </div>';
            html += '     <div class="form-group col-md-3">';
            html += '          <label for="karat">Karat</label>';
            html += '          <input name="karat[]" class="form-control" id="karat">';
            html += '     </div>';
            html += '     <div class="form-group col-md-3">';
            html += '          <label for="harga">Harga</label>';
            html += '          <input name="price[]" class="form-control" id="harga">';
            html += '     </div>';
            html += '</div>';
            html += '<button type="button" style="float:right;"class="btn btn-danger" onclick="del_form(this)">Hapus</button>';                                
            html += '<button type="button" style="float:right;"onclick="add_form()" class="btn btn-success">Tambah</button>';
            html += '</div>';
     
             $('#form-body').append(html);
        }
 
        //function to delete form
        function del_form(id)
        {
            id.closest('div').remove();
        }
    </script>

    
</body>
@endsection