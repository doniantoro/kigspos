<?php

use App\Goods;
use App\GoodsStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GoodsFlowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        $goods_status= GoodsStatus::all()->pluck('id')->toArray();
        $goods = Goods::all()->pluck('id')->toArray();

        for($i=0;$i<5;$i++){
            $status_id = $faker->randomElement($goods_status);
            $goods = $faker->randomElement($goods_status);
        }
    }
}
