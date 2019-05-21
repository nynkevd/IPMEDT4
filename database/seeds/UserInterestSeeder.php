<?php

use Illuminate\Database\Seeder;

class UserInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('user_interests')->insert([
    		'user'=> "Lara",
    		'interest' => "Programmeren"
    	]);
    	DB::table('user_interests')->insert([
    		'user'=> "Lara",
    		'interest' => "Dieren"
    	]);

    	DB::table('user_interests')->insert([
    		'user'=> "Noa",
    		'interest' => "Netflix"
    	]);
    	DB::table('user_interests')->insert([
    		'user'=> "Noa",
    		'interest' => "Lezen"
    	]);

    	DB::table('user_interests')->insert([
    		'user'=> "Nynke",
    		'interest' => "Netflix"
    	]);
    	DB::table('user_interests')->insert([
    		'user'=> "Nynke",
    		'interest' => "Sport"
    	]);

    	DB::table('user_interests')->insert([
    		'user'=> "Anouk",
    		'interest' => "Programmeren"
    	]);
    	DB::table('user_interests')->insert([
    		'user'=> "Anouk",
    		'interest' => "Technologie"
    	]);

    	DB::table('user_interests')->insert([
    		'user'=> "Dayella",
    		'interest' => "Lezen"
    	]);
    	DB::table('user_interests')->insert([
    		'user'=> "Dayella",
    		'interest' => "Dieren"
    	]);

    }
}
