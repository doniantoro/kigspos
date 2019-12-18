<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods_category')->insert([
            'name' => 'cincin',
        ]);
        DB::table('goods_category')->insert([
            'name' => 'kalung',
        ]);
        DB::table('goods_category')->insert([
            'name' => 'gelang',
        ]);
        
    }
}
