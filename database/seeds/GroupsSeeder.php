<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'id' => Uuid::generate(4),
            'tournament_id' => 1,
            'user_id' => 1,
        ]);
    }
}
