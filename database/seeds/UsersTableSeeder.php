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
            'name' => 'nom',
            'email' => 'nom@gmail.com',
            'password'=> 'nomnom',
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password'=> 'testtest',
            'type' => 'default',
        ]);
       
    }
}