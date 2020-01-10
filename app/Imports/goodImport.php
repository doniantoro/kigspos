<?php

namespace App\Imports;

use App\Goods;
use App\GoodsFlow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class goodImport implements ToModel,WithHeadingRow
{
        
    //private $sku= Goods::select('sku')->get();
	
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function __construct(){

    	$failed=collect();
    
    }
	

    public function model(array $row )
    { 
	$failed=collect();
        
        $sku= Goods::select('sku')->get();
        $same=true;
        $i="";
        $int=0;
    
        foreach($sku as $sku2)
        {
            if($sku2->sku == $row['sku'])//kondision if sku avaible on db with user input,		
            {
                $same=false;       
                $failed=$row['sku'];
                    $int++;
                session()->flash('alert', 'Maaf produk dengan sku '.$row['sku'] .'Tidak dapat diinput,karena nomor sku tersebut sudah ada di database');
            
            }
        }
        if ($same==true)//kondision if sku is not avaible
		{
    //Input to Goods
                $products=new Goods;   
                $products->sku = $row['sku'];
                $products->name = $row['name'];
                $products->category_id = $row['category_id'];
                $products->subcategory_id = $row['subcategory_id'];
                $products->weight = $row['weight'];
                $products->karat = $row['karat'];
                $products->price = $row['price'];
                $products->current_status =1;
                $products->supplier_id = $row['supplier_id'];
                $products->save();  
                
                //Input to GoodsFlow
                $last_id = $products->id;
                $products= new GoodsFlow(); 
                    $products->status_id =1 ;
                    $products->goods_id = $last_id;
                    $products->save();
                    session()->flash('alert', 'Semua data berhasil di input');
    
        }
        
        //dd($failed);
      
    }
}
