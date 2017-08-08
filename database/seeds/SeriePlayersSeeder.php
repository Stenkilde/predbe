<?php

use Illuminate\Database\Seeder;

class SeriePlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serie_players')->insert([
            'serie_id' => 1,
            'team_id' => 1
        ]);
    }
}
