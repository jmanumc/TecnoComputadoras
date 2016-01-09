<?php

use Illuminate\Database\Seeder;

class ArticleTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_tag')->insert([
        	'article_id' => 1,
        	'tag_id'     => 1
        ]);

        DB::table('article_tag')->insert([
        	'article_id' => 1,
        	'tag_id'     => 2
        ]);

        DB::table('article_tag')->insert([
        	'article_id' => 1,
        	'tag_id'     => 3
        ]);
    }
}
