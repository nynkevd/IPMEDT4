<?php

use Illuminate\Database\Seeder;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('user_info')->insert([
        //   'username' => 'Nynke',
        //   'profile_picture' => 1,
        //   'to' => "Leiden",
        //   'from' => "De Vink",
        //   'age' => 18
        // ]);
        DB::table('user_info')->insert([
          'username' => 'Lara',
          'profile_picture' => 3,
          'to' => "Alphen",
          'from' => "Leiden",
          'age' => 18
        ]);

        DB::table('user_info')->insert([
          'username' => 'Noa',
          'profile_picture' => 2,
          'to' => "Nieuw-Vennep",
          'from' => "Leiden",
          'age' => 18
        ]);

        DB::table('user_info')->insert([
          'username' => 'Dayella',
          'profile_picture' => 1,
          'to' => "Nieuw-Vennep",
          'from' => "Leiden",
          'age' => 19
        ]);

        DB::table('user_info')->insert([
          'username' => 'Anouk',
          'profile_picture' => 3,
          'to' => "Voorschoten",
          'from' => "Leiden",
          'age' => 20 
        ]);
    }
}
