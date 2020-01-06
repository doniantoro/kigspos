<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<table>
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
            <th>Status</th>
                                
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
                                
        </tr>
    </thead>
    <tbody>
    <?php $no=1; ?>
    @foreach($data as $good)
        <tr>
            <td><?php echo $no; ?></td>
            <td>{{$good->goods->sku}}</td>
            <td>{{$good->goods['name']}}</td>
            <td>{{$good->goods['goodscategory']['name']}}</td>
            <td>{{$good->goods['goodssubcategory']['name']}}</td>
            <td>{{$good->goods['weight']}}</td>
            <td>{{$good->goods['karat']}}</td>
            <td>{{number_format($good->goods['price'],0, ',' , '.')}}</td> 
            <td>{{$good->goods['supplier']->name}}</td>
            <td>{{$good->goods_status->status}}</td>
        </tr>
        <?php $no++; ?>
    @endforeach
    </tbody>
</table>



</body>
</html>