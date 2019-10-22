<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'りんご',
            'description' => '新鮮なりんごです。',
            'price' => 98,
            'category_id' => 1,
        ]);
    }
}
