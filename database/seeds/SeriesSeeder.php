<?php

use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'name' => str_random(10),
            'format' => 'BO2',
            'winner_id' => 1
        ]);
    }
}
