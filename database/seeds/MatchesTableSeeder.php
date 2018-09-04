<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            'venue' => 'forest stadium',
            'team_id_one' => '2',
            'team_id_two' => '1',
        ]);
    }
}
