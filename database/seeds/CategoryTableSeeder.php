<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('category')->insert([
            'name' => 'Parent',
            'parent' => 0,
            'order' => 0,
        ]);
        
         DB::table('category')->update([
                'id' => 0
            ]);
    }
}
