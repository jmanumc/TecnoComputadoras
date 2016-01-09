<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
        	'title'       => 'Article test',
        	'description' => 'Description of the test article',
        	'content'     => 'Content of the article test',
        	'user_id'     => 1,
        	'category_id' => 1
        ]);
    }
}
