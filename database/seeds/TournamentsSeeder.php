<?php

use Illuminate\Database\Seeder;

class TournamentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tournaments')->insert([
            'name' => str_random(10),
            'game_id' => 1,
            'format' => 'GSL'
        ]);
    }
}
