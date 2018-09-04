<?php

use Illuminate\Database\Seeder;

class StatsteamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statsteams')->insert([
            'team_id' => '1',
            'won' => '7',
            'lost'=> '0',
        ]);
        DB::table('statsteams')->insert([
            'team_id' => '2',
            'won' => '0',
            'lost'=> '7',
        ]);
    }
}
