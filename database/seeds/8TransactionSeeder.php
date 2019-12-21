<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\User as User;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = User::all()->pluck('id')->toArray();
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
            DB::table('transaction')->insert([
                'price_total' => $faker->numberBetween(1000000, 100000000),
                'customer_name' => $faker->name,
                'user_id' => $faker->randomElement($user_id),
            ]);
        }
    }
}
