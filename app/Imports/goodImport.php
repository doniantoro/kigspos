<?php

namespace App\Imports;

use App\good;
use Maatwebsite\Excel\Concerns\ToModel;

class goodImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new good([
            //
            'sku' => $row[1],
            'name' => $row[2], 
            'category_id' => $row[3],
            'subcategory_id' => $row[4],
            'weight' => $row[5], 
            'karat' => $row[6],
            'price' => $row[7],
            'current_status' => $row[8], 
            'supplier_id' => $row[9], 
        ]);
    }
}
