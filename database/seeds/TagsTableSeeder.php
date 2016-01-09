<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        	'name' => 'Test 1'
        ]);

        DB::table('tags')->insert([
        	'name' => 'Test 2'
        ]);

        DB::table('tags')->insert([
        	'name' => 'Test 3'
        ]);
    }
}
