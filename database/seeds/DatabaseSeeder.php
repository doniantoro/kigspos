<?php

use App\GoodsCategory;
use App\GoodsFlow;
use App\Sales;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GoodsCategorySeeder::class);
        //  $this->call(GoodsFlowSeeder::class);
        //  $this->call(GoodsSeeder::class);
        $this->call(GoodsStatusSeeder::class);
        $this->call(GoodsSubcategorySeeder::class);
        //  $this->call(SalesSeeder::class);
        $this->call(SupplierSeeder::class);
        //  $this->call(TransactionSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(UserLevelSeeder::class);
    }
}
