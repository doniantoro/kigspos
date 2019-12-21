<?php

namespace App\Imports;

use App\Goods;
use App\GoodsFlow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class goodImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
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
              
         return ($products);
    }
}
