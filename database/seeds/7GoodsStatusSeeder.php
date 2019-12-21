<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods_status')->insert([
            'status' => 'in',
        ]);
        DB::table('goods_status')->insert([
            'status' => 'out',
        ]);
    }
}
