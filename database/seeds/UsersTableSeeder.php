<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Juan Manuel',
        	'email' => 'jmanuel@email.com',
        	'password' => bcrypt('secret'),
        	'type' => 'admin'
        ]);
    }
}
