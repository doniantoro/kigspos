<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsSubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods_subcategory')->insert([
            'name' => 'Emas',
        ]);
        DB::table('goods_subcategory')->insert([
            'name' => 'Perak',
        ]);
        DB::table('goods_subcategory')->insert([
            'name' => 'Ruby',
        ]);
        DB::table('goods_subcategory')->insert([
            'name' => 'Diamond',
        ]);
        DB::table('goods_subcategory')->insert([
            'name' => 'Sapphire',
        ]);
    }
}
