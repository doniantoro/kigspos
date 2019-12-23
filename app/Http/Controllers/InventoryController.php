<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GoodsFlow;
use App\Goods;      

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\goodImport;
use App\Imports\goods_flowsImport;
use App\Http\Controllers\Controller;

use Maatwebsite\Excel\HeadingRowImport;


class InventoryController extends Controller
{

	  /*
       Inventory Controller index page to show goods in.

        Route   : /pos/inventory
        Method  : GET

    */
    public function index(){
		
		$goods = Goods::with('goodscategory', 'goodssubcategory','supplier')
							->orderby('id','desc')
							->where('current_status','1') //where goods in
							->get();
		
		return view('products.index', ['goods' => $goods]);
	}

	 /*
       Inventory Controller  manual_input page to input Goods.

        Route   : /pos/inventory
        Method  : GET

    */
    
	public function manual_input()
	{
		$category = \App\GoodsCategory::get();
		$sub_category=\App\GoodsSubcategory::get();
		$supplier=\App\Supplier::get();
		
		return view('products.manual_input',['category' => $category,'sub_category' => $sub_category,'supplier' => $supplier]);
	}
	
	 /*
	   Inventory Controller manual input procces 
	   to procces what user input to show goods in.

        Route   : /pos/inventory
        Method  : GET

    */
    
	
	public function manual_input_proses(Request $request)
	{
		$input = $request->all();//request all of data input
		$sku= Goods::get();
		$succes="";
		$int=1;
		//get how many data and looping
		for ($i=0; $i < count($input['sku']); ++$i) 
		{
			$same=true;
			foreach($sku as $sku2)
			{
				if($sku2->sku==$input['sku'][$i])//kondision if sku avaible on db with user input,		
				{
					$same=false;
					$succes = array($input['sku'][$i]);
					 
					//$count = count($succes2);
					$int++;
				}
			}
			if ($same==true)//kondision if sku is not avaible
			{
					//Input produk to db goods
					$products= new Goods;        
					$products->sku = $input['sku'][$i];
					$products->name= $input['name'][$i];
					$products->category_id= $input['category_id'][$i];
					$products->subcategory_id = $input['subcategory_id'][$i];
					$products->weight= $input['weight'][$i];
					$products->karat = $input['karat'][$i];
					$products->price= $input['price'][$i];
					$products->current_status= 1;
					$products->supplier_id= $input['supplier'][$i];
					$products->save();  

					$last_id = $products->id;//get last id of goods flow

					//input procces to db goods flow
					$GoodsFlow= new GoodsFlow(); 
					$GoodsFlow->status_id =1 ;
					$GoodsFlow->goods_id = $last_id;
					$GoodsFlow->save();  
					$succes="Barang berhasil di input";
			
			}
		 }
		// alihkan halaman ke halaman input
	    return redirect('/produk/manual_input')->with(['success' => $succes]);
		// return json_encode($succes2);
	}


	 /*
       Inventory Controller input_excell  to input from bulk data.

        Route   : /pos/inventory
        Method  : POST

    */
    

	public function input_excell(Request $request)
	{
		// get file excel
		$file = $request->file('file');
 
		// import data from goodImport
		Excel::import(new goodImport,$file);
	
		// alihkan halaman kembali
		return redirect('/produk/');
	}

	 /*
       Inventory Controller flow flow_barang page to show flow goods when goods in,out,and return.

        Route   : /pos/inventory
        Method  : GET

    */
    

	public function flow_barang(Request $request)
	{
		$goods = GoodsFlow::with('goods', 'goods.goodscategory','goods.goodssubcategory','goods_status')
							->orderby('id','desc')
							->whereBetween('created_at', [$request->from, $request->to])    
							->get();

		return view('/products/flow_barang',['goods' => $goods]);
 	}


	 /*
       Inventory Controller flow goods_stock page to show goods avaible.

        Route   : /pos/inventory
        Method  : GET

    */
    
	public function goods_stock()
	{
		$goods = Goods::with('goodscategory', 'goodssubcategory','goodsflow')
						->orderby('goods.id','desc')
						->where('current_status','=','1')//where current status not sold or return
						->get();

		return view('/products/goods_stock',['goods' => $goods]);	
	}

 	/*
       Inventory Controller flow update_goods_stock page to user update information product.

        Route   : /pos/inventory
        Method  : GET

    */

	public function update_stock($id)
	{		
		$goods=Goods::with('goodscategory', 'goodssubcategory')
					->where('id','=',$id)
					->get();
		$category = \App\GoodsCategory::get();
		$sub_category=\App\GoodsSubcategory::get();
		$supplier=\App\Supplier::get();

	return view('/products/update_goods_stock',['goods' => $goods,'category' => $category,'sub_category' => $sub_category,'supplier'=>$supplier]);

	}

	/*
       Inventory Controller flow update_stock_proses  to data procces to update.

        Route   : /pos/inventory
        Method  : GET

    */

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
			$goods->supplier_id = $request->supplier ;
			$goods->save();
			

	// alihkan halaman ke halaman depan
	return redirect('/produk/goods_stock');

	}

	/*
       Inventory Controller flow delete_stock  to delete data procces.

        Route   : /pos/inventory
        Method  : GET

    */

	public function delete_stock($id,Request $request)
	{

		DB::table('goods')->where('id', $id)->delete();
		DB::table('GoodsFlow')->where('goods_id', $id)->delete();


	// alihkan halaman ke halaman depan
	return redirect('/produk/goods_stock');

	
}

	/*
       Inventory Controller flow return_stock  to return goods procces.

        Route   : /pos/inventory
        Method  : GET

	*/
		
	public function return_stock($id,Request $request)
	{

		DB::table('GoodsFlow')->insert
			([
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
