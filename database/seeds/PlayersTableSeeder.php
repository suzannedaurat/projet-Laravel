<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => 'LilFox',
            'team_id' => '2',
            'country' => 'foxland',
            'position' => 'Wackbater',
            'rank' => '3',
        ]);
        DB::table('players')->insert([
            'name' => 'LilCat',
            'team_id' => '1',
            'position'=> 'Twig Runner',
            'country' => 'catland',
            'rank' => '9',
        ]);
    }
}
