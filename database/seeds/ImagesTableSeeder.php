<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
        	'article_id' => 1
        ]);

        DB::table('images')->insert([
            'article_id' => 1
        ]);

        DB::table('images')->insert([
            'article_id' => 1
        ]);
    }
}
