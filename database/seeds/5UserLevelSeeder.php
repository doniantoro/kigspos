<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_level')->insert([
            'name' => 'Supervisor',
        ]);
        DB::table('user_level')->insert([
            'name' => 'Staff',
        ]);
    }
}
