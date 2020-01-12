<?php

use Illuminate\Database\Seeder;
use App\UserLevel as UserLevel;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_level_id = UserLevel::all()->pluck('id')->toArray();
        $faker = Faker::create('id_ID');
        DB::table('user')->insert([
            'id' => 0,
            'name' => $faker->name,
            'user_level_id' => $faker->randomElement($user_level_id),
            'username' => $faker->firstName,
            'password' => $faker->password,
        ]);
        for($i=0;$i<5;$i++){
            DB::table('user')->insert([
                'name' => $faker->name,
                'user_level_id' => $faker->randomElement($user_level_id),
                'username' => $faker->firstName,
                'password' => $faker->password,
            ]);
        }
    }
}
