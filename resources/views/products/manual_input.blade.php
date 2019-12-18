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
                    <form action="/produk/manual_input_proses" method="get">
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
                                    <td ><input style="width:120px;"  name="name[]" placeholder="nama" required></td>
                                    <td ><input style="width:120px;"  name="sku[]" placeholder="sku"required></td>
                                    <td>
                                        <select name="category_id[]" required>
                                            <option value="">Kategory</option>
                                            @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->name}}</option>
                                            @endforeach 
                                        </select>    
                                    </td>
                                    <td>
                                        <select name="subcategory_id[]" required>
                                            <option value="">Sub kategory</option>
                                            @foreach($subcategory as $subcategories)
                                                <option value="{{$subcategories->id}}">{{$subcategories->name}}</option>
                                            @endforeach
                                        </select>        
                                    </td>
                                    <td ><input style="width:120px;" onkeypress="return hanyaAngka(event)" name="karat[]" placeholder="kadar"required></td>
                                    <td ><input style="width:120px;" onkeypress="return hanyaAngka(event)" name="weight[]" placeholder="berat"required></td>
                                    <td ><input style="width:120px;" onkeypress="return hanyaAngka(event)" name="price[]" placeholder="harga"required></td>
                                    <td><button type="button" onclick="add_form()" class="btn btn-success">Tambah Form</button></td>
                                </tr>                                
                            </tbody>
                        </table>
                        <center>
                            <button type="submit" class="btn btn-primary mx-auto">submit</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>

        <!-- Function to add coloum input -->
        <script type="text/javascript">
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                 return false;
                  return true;
                }
        function add_form()
        {
            var html = '';
            
            html += '<tr>';
            html += '<th scope="row">1</th>';
            html += '<td ><input style="width:120px;"  name="name[]" placeholder="nama" required></td>';
            html += '<td ><input style="width:120px;"  name="sku[]" placeholder="sku" required></td>';
            html += '<td>';
            html += '<select name="category_id[]" required>';
            html += ' <option value=""> kategory</option>';
            html += '@foreach($category as $categories)';
            html += '<option value="{{$categories->id}}">{{$categories->name}}</option>';
            html += '@endforeach'; 
            html += '</select> ';
            html += '</td>';
            html += '<td>';
            html += '<select name="subcategory_id[]" required>';
            html += ' <option value="">Sub kategory</option>';
            html += ' @foreach($subcategory as $subcategories)';
            html += ' <option value="{{$subcategories->id}}">{{$subcategories->name}}</option>';
            html += ' @endforeach';
            html += '</select> ';
            html += '</td>';
            html += '<td ><input style="width:120px;" onkeypress="return hanyaAngka(event)" name="karat[]" placeholder="kadar"required></td>';
            html += '<td ><input style="width:120px;" onkeypress="return hanyaAngka(event)" name="weight[]" placeholder="berat"required></td>';
            html += '<td ><input style="width:120px;" onkeypress="return hanyaAngka(event)" name="price[]" placeholder="harga"required></td>';
            html += '<td><button type="button" class="btn btn-danger" onclick="del_form(this)">Hapus</button></td>';
            html += '</tr>';
            $('#form-body').append(html);
        }
 
        function del_form(id)
        {
            id.closest('tr').remove();
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>