<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TeamsSeeder::class);
        $this->call(TournamentsSeeder::class);
        $this->call(GamesSeeder::class);
        $this->call(GroupMembersSeeder::class);
        $this->call(GroupsSeeder::class);
        $this->call(SeriePlayersSeeder::class);
        $this->call(SeriesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
