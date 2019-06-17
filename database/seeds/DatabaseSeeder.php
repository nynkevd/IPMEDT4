<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(InterestTableSeeder::class);
        // $this->call(UserInterestSeeder::class);
        // $this->call(AccountsTableSeeder::class);
        $this->call(PicturesTableSeeder::class);
        // $this->call(UserInfoTableSeeder::class);
        // $this->call(FriendsSeeder::class);
    }
}
