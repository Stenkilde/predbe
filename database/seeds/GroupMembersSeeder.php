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
            'group_id' => 'c8f990de-9f4e-4380-b520-57d4d1d7e451',
            'user_id' => 1
        ]);
    }
}
