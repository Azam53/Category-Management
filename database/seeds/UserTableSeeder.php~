<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('user')->insert([
            'name' => 'test',
            'email' => 'test@modera.com',
            'password' => Hash::make('modera'),
        ]);
    }
}
