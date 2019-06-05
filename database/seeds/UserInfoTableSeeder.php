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
        DB::table('user_info')->insert([
          'username' => 'Nynke',
          'profile_picture' => 1,
          'to' => "Leiden",
          'from' => "De Vink",
          'age' => 18
        ]);
    }
}
