<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('teams')->insert([
            'country' => 'catland',
            'name' => 'cats',
            'flag'=> 'cats.png',
            'rank' => '2',
        ]);
        DB::table('teams')->insert([
            'country' => 'foxland',
            'name' => 'foxes',
            'flag'=> 'foxland.jpeg',
            'rank' => '1',
        ]);
        DB::table('teams')->insert([
            'country' => 'badgerland',
            'name' => 'badgers',
            'flag'=> 'badgers.jpeg',
            'rank' => '3',
        ]);
    }
}
