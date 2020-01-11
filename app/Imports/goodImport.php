<?php

namespace App\Imports;

use App\Goods;
use App\GoodsFlow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\IOFactory; 
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class goodImport implements ToCollection,WithHeadingRow
{
        
  	
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
	

    public function collection(Collection $rows )
    { 
            $failed=collect();    
        $sku= Goods::select('sku')->get();
        $same=true;
        $i="";
        $int=0;
    
        foreach ($rows as $row) 
        {
            foreach($sku as $sku2)
            {
                if($sku2->sku == $row['sku'])//kondision if sku avaible on db with user input,		
                {
                    $same=false;       
                    $failed[$int]=$row['sku'];
                    $int++;
                    $param=1;
                }
            }
            if ($same==true)//kondision if sku is not avaible
			{
			
    
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
  
        }
    }
    if($param == 1){
        session()->flash('alert', 'Maaf produk dengan sku '.$failed .' Tidak dapat diinput,karena nomor sku tersebut sudah ada di database');		// alihkan halaman ke halaman input
     }
    else{
     session()->flash('alert','semua barang berhasil di input');
    }
    }
}
