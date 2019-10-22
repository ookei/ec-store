<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();

        DB::table('user_addresses')->insert([
            'user_id' => $user->id,
            'phone_number' => '090-1234-5678',
            'zip_code' => '100-8111',
            'address' => '東京都千代田区千代田1-1',
        ]);
    }
}
