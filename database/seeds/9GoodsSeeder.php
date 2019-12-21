<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\GoodsCategory as GoodsCategory;
use App\GoodsSubcategory as GoodsSubcategory;
use App\GoodsStatus as GoodsStatus;
use App\Supplier as Supplier;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_id = GoodsCategory::all()->pluck('id')->toArray();
        $subcategory_id = GoodsSubcategory::all()->pluck('id')->toArray();
        $goods_status = GoodsStatus::all()->pluck('id')->toArray();
        $supplier_id = Supplier::all()->pluck('id')->toArray();
        $faker = Faker::create('id_ID');
        for($i=0;$i<50;$i++){
            DB::table('goods')->insert([
                'sku' => $faker->numberBetween(10000000,9999999999),
                'name' => '',
                'category_id' => $faker->randomElement($category_id),
                'subcategory_id' => $faker->randomElement($subcategory_id),
                'weight' => $faker->numberBetween(10,30),
                'karat' => $faker->numberBetween(10,25),
                'price' => $faker->numberBetween(1000000,5000000),
                'current_status' => $faker->randomElement($goods_status),
                'supplier_id' => $faker->randomElement($supplier_id),
            ]);
        }
    }
}
