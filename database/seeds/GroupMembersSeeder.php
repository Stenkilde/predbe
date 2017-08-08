<?php

use Illuminate\Database\Seeder;

class GroupMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_members')->insert([
            'group_id' => 1,
            'user_id' => 1
        ]);
    }
}
