<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\good;
use App\goods_flows;
use App\Goods;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\goodImport;
use App\Imports\goods_flowsImport;
use App\Http\Controllers\Controller;


class InventoryController extends Controller
{
    public function index(){
		$goods = DB::table('goods')
				->join('goods_category', 'goods.category_id', '=', 'goods_category.id')
				->join('goods_subcategory', 'goods.subcategory_id', '=', 'goods_subcategory.id')
				->select('goods.*','goods_category.name','goods_subcategory.name')
				->orderBy('goods.id', 'desc')
				->get();

		$goods_new = Goods::with('goodscategory', 'goodssubcategory')->get();
		
		// return view('products.index', ['goods' => $goods]);
		return json_encode($goods_new);
    }

	public function manual_input()
	{
		$category = DB::table('goods_category')
				->select('goods_category.*','goods_category.name')
				->get();
		$subcategory = DB::table('goods_subcategory')
				->select('goods_subcategory.*','goods_subcategory.name')
				->get();
		return view('products.manual_input',['category' => $category],['subcategory' => $subcategory]);
    }
    
	public function manual_input_proses(Request $request)
	{
		$input = $request->all();
		for ($i=0; $i < count($input['sku']); ++$i) 
		{
			$products= new good;        
			$products->sku = $input['sku'][$i];
			$products->name= $input['name'][$i];
			$products->category_id= $input['category_id'][$i];
			$products->subcategory_id = $input['subcategory_id'][$i];
			$products->weight= $input['weight'][$i];
			$products->karat = $input['karat'][$i];
			$products->price= $input['price'][$i];
			$products->current_status= 1;
			$products->supplier_id= 1;
			$products->save();  
		
			
			DB::table('goods_flow')->insert([
			'status_id' => 1,
			'sku' =>  $input['sku'][$i]
			
		]);
		
		 }
		// alihkan halaman ke halaman input
	    return redirect('/produk/manual_input');
		 
	}
	public function flow_barang(Request $request)
	{
	$goods = DB::table('goods')
			->join('goods_flow', 'goods.sku', '=', 'goods_flow.sku')
			->join('goods_status', 'goods_status.id', '=', 'goods_flow.status_id')
			->join('goods_category', 'goods.category_id', '=', 'goods_category.id')
			->join('goods_subcategory', 'goods.subcategory_id', '=', 'goods_subcategory.id')
			->select('goods.*','goods_category.name','goods_subcategory.name','goods_status.status')
			->whereBetween('goods_flow.date', [$request->from, $request->to])    
			->orderBy('id', 'desc')
			->get();

	return view('/products/flow_barang',['goods' => $goods]);
 
}
public function input_excell(Request $request) {
	// menangkap file excel
	$file = $request->file('file');
 
	// membuat nama file unik
	$nama_file = rand().$file->getClientOriginalName();

	// upload ke folder file_siswa di dalam folder public
	$file->move('file_import',$nama_file);

	// import data
	Excel::import(new goodImport, public_path('/file_import/'.$nama_file));
	Excel::import(new goods_flowsImport, public_path('/file_import/'.$nama_file));

	// alihkan halaman kembali
	return redirect('/produk/');
}

public function goods_stock()
{
	$goods = DB::table('goods')
			->join('goods_flow', 'goods.sku', '=', 'goods_flow.sku')
			->join('goods_category', 'goods.category_id', '=', 'goods_category.id')
			->join('goods_subcategory', 'goods.subcategory_id', '=', 'goods_subcategory.id')
			->select('goods.*','goods_category.name','goods_subcategory.name')
			->where('current_status','=','1')
			->where('goods_flow.status_id','=','1')
			->get();

	return view('/products/goods_stock',['goods' => $goods]);	

}


public function update_stock($id,Request $request)
{
$goods = DB::table('goods')
		->join('goods_flow', 'goods.sku', '=', 'goods_flow.sku')
		->select('goods.*')
		->where('goods.id','=',$request->sku)
		->orderBy('id', 'desc')
		->get();

return view('/products/update_goods_stock',['goods' => $goods]);
}

public function update_stock_proses($id,Request $request)
{

	// update data ke table barang
	DB::table('goods')->where('id',$id)->update([
		'sku' => $request->sku,
		'name' => $request->name,
		'category_id' => $request->category_id,
		'subcategory_id' => $request->subcategory_id,
		'weight' => $request->weight,
		'karat' => $request->karat,
		'price' => $request->price
	]);
	
	// alihkan halaman ke halaman depan
	return redirect('/produk/goods_stock');

}


public function delete_stock($id,Request $request)
{

DB::table('goods')->where('sku', $id)->delete();
DB::table('goods_flow')->where('sku', $id)->delete();

// alihkan halaman ke halaman depan
return redirect('/produk/goods_stock');

}
public function return_stock($id,Request $request)
{

DB::table('goods_flow')->insert([
	'status_id' => 2,
	'sku' =>  $request->sku
	]);

	DB::table('goods')->where('sku',$id)->update([
		'current_status'=>2
	]);

// alihkan halaman ke halaman depan
return redirect('/produk/goods_stock');

}




}
