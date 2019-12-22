<?php

namespace App\Imports;

use App\goods_flows;
use Maatwebsite\Excel\Concerns\ToModel;

class goods_flowsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new goods_flows([
            'status_id' => 1, 
            'goods_id' => 5
            
        ]);
    }
}
