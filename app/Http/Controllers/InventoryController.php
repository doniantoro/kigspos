<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\good;
use App\goods_flows;
use App\GoodsFlow;
use App\Goods;      

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\goodImport;
use App\Imports\goods_flowsImport;
use App\Http\Controllers\Controller;


class InventoryController extends Controller
{
    public function index(){
		
		$goods = Goods::with('goodscategory', 'goodssubcategory','supplier')
							->orderby('goods.id','desc')
							->where('current_status','1')
							->get();
		
		return view('products.index', ['goods' => $goods]);
    }

	public function manual_input()
	{
		$goods = Goods::with('goodscategory', 'goodssubcategory','supplier')
							->orderby('goods.id','desc')
							->get();
		return view('products.manual_input',['goods' => $goods]);
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


			//return $products->id;

			$last_id = $products->id;

			$products= new GoodsFlow(); 
			$products->status_id =1 ;
			$products->goods_id = $last_id;
			$products->save();  
			
		 }
		// alihkan halaman ke halaman input
	    return redirect('/produk/manual_input');
		 
	}
	public function flow_barang(Request $request)
	{
	$goods = goodsflow::with('goods', 'goods.goodscategory','goods.goodssubcategory','goods.goodsstatus')
	->orderby('id','desc')
	->whereBetween('created_at', [$request->from, $request->to])    
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
			$goods = Goods::with('goodscategory', 'goodssubcategory','goodsflow')
			->orderby('goods.id','desc')
			->where('current_status','=','1')
		//	->where('goods_flows.status_id','=','1')
			->get();

			return view('/products/goods_stock',['goods' => $goods]);	

}


public function update_stock($id)
{		
	$goods=Goods::with('goodscategory', 'goodssubcategory')
				->where('id','=',$id)
				->get();
return view('/products/update_goods_stock',['goods' => $goods]);
}

public function update_stock_proses($id,Request $request)
{
	
	// update data ke table barang
	$goods=Goods::find($id);
		$goods->sku = $request->sku ;
		$goods->name = $request->name ;
		$goods->category_id = $request->category_id ;
		$goods->subcategory_id = $request->subcategory_id ;
		$goods->weight = $request->weight ;
		$goods->karat = $request->karat ;
		$goods->price = $request->price ;
		$goods->save();
		

	// alihkan halaman ke halaman depan
	return redirect('/produk/goods_stock');

}


public function delete_stock($id,Request $request)
{

DB::table('goods')->where('id', $id)->delete();
DB::table('goods_flow')->where('goods_id', $id)->delete();


// alihkan halaman ke halaman depan
return redirect('/produk/goods_stock');

}
public function return_stock($id,Request $request)
{

DB::table('goods_flow')->insert([
	'status_id' => 3,
	'goods_id' => $id,
	 ]);
	 
	$goods=Goods::find($id);
		$goods->current_status = 2 ;
		$goods->save();

// alihkan halaman ke halaman depan
return redirect('/produk/goods_stock');

}




}
