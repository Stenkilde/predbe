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
            'id' => 'c8f990de-9f4e-4380-b520-57d4d1d7e451',
            'tournament_id' => 1,
            'user_id' => 1,
        ]);
    }
}
