<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
    </head>
    <body class=" bg-primary pt-4">
        <div class="container pt-4">
            <div class="row pt-4" style="height:100%;">
                <div class="kotak w-100 h-100 bg-light rounded p-4 mt-4 mx-auto"  >   
                 <!-- Table update data -->
                @foreach($goods as $good)
                    <form action="/produk/update_stock_proses/{{$good->id}}" method="get">
                        <center>
                        <h1 style="color:black;" >INPUT DATA</h1>
                        </center><br>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Sku</th>
                                <th scope="col">Kategory</th>
                                <th scope="col">Sub Kategory</th>
                                <th scope="col">Kadar</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Harga</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="form-body">
                               <tr>
                                    <th scope="row">1</th>
                                    <td ><input style="width:120px;"  name="name" value="{{$good->name}}" required></td>
                                    <td ><input style="width:120px;"  name="sku" value="{{$good->sku}}"required></td>
                                    <td>
                                        <!-- show category -->  
                                        <select name="category_id" required>  <?php $i=1; ?>
                                            <option value="">Kategory</option>
                                            @foreach($category as $categories)
                                            <option value="{{$categories->id}}" @if($categories->id==$good->category_id){{'selected'}} @endif>{{$categories->name}}</option>
                                            @endforeach
                                        
                                         </select>    
                                    </td>
                                    <td>
                                        <!-- show subcategory -->
                                        <select name="subcategory_id" required>
                                            <option value="">Sub kategory</option>
                                                @foreach($sub_category as $sub_categories)    
                                            <option value="{{$sub_categories->id}}" @if($sub_categories->id==$good->subcategory_id){{'selected'}} @endif >{{$sub_categories->name}}</option>
                                                @endforeach
                                        </select>        
                                    </td>
                                    <td ><input style="width:120px;"  name="karat" onkeypress="return hanyaAngka(event)" value="{{$good->karat}}"required></td>
                                    <td ><input style="width:120px;"  name="weight" onkeypress="return hanyaAngka(event)" value="{{$good->weight}}"required></td>
                                    <td ><input style="width:120px;"  id="rupiah" name="price" onkeypress="return hanyaAngka(event)" value="{{ $good->price }}"required></td>
                                    <td>
                                        <!-- show supplier -->
                                        <select name="supplier[]" required>
                                                <option value="">Supplier</option>
                                                    @foreach($supplier as $suppliers)
                                                        <option value="{{$suppliers->id}}" @if($suppliers->id==$good->supplier_id){{'selected'}} @endif>{{$suppliers->name}}</option>                             
                                                    @endforeach 
                                        </select>    
                                     </td>
                                
                                </tr>   
              				
                                @endforeach                             
                                    
                            </tbody>
                            
                        </table>
                        <center>
                            <button type="submit" class="btn btn-primary mx-auto">submit</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
      
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
</body>
</html>