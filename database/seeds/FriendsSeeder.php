<?php

use Illuminate\Database\Seeder;

class FriendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('friends')->insert([
      		'username'=> "Lara",
      		'friend' => "Nynke"
      	]);

        DB::table('friends')->insert([
      		'username'=> "Dayella",
      		'friend' => "Anouk"
      	]);

        DB::table('friends')->insert([
      		'username'=> "Noa",
      		'friend' => "Lara"
      	]);

        DB::table('friends')->insert([
      		'username'=> "Anouk",
      		'friend' => "Dayella"
      	]);

        DB::table('friends')->insert([
      		'username'=> "Nynke",
      		'friend' => "Noa"
      	]);
    }
}
