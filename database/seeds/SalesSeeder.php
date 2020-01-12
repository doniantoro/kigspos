<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Transaction as Transaction;
use App\Goods as Goods;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $transaction_id = Transaction::all()->pluck('id')->toArray();
        $goods_id = Goods::all()->pluck('id')->toArray();
        for($i=0;$i<50;$i++){
            DB::table('sales')->insert([
                'transaction_id' => $faker->randomElement($transaction_id),
                'goods_id' => $faker->randomElement($goods_id),
            ]);
        }
    }
}
