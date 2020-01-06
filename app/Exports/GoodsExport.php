<?php

namespace App\Exports;

use App\GoodsFlow;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;

use Illuminate\Contracts\View\View;

class GoodsExport implements FromView //FromQuery
{

public function __construct(string $from ,string $to)
{
    $this->from = $from;
    $this->to = $to;
}
public function view():View //query
{
    // return GoodsFlow::query()->whereBetween('created_at',['2018-11-20' ,'2021-11-20'] )
    // ->with('goods', 'goods.goodscategory','goods.goodssubcategory','goods_status')                    
    // ->orderby('id','desc');

    return view('exports.report', [
        'data' => GoodsFlow::with('goods', 'goods.goodscategory','goods.goodssubcategory','goods_status')
                            ->whereBetween('created_at',[$this->from , $this->to] )->get()

    //    return User::query()->where('name', 'like', '%'. $this->name);
    ]);    

}
}
