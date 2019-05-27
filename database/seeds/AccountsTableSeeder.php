<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('accounts')->insert([
        // 	'username' => 'test',
        // 	'name' => 'test',
        // 	'email' => 'test@example.com',
        // 	'password' => 'test',
        // ]);

        // DB::table('accounts')->insert([
        // 	'username' => 'test2',
        // 	'name' => 'test2',
        // 	'email' => 'test2@example.com',
        // 	'password' => 'test2',
        // ]);

        DB::table('accounts')->insert([
        	'username' => 'Lara',
        	'name' => 'Lara',
        	'email' => 'lara@example.com',
        	'password' => 'lara',
        ]);

        DB::table('accounts')->insert([
        	'username' => 'Noa',
        	'name' => 'Noa',
        	'email' => 'noa@example.com',
        	'password' => 'noa',
        ]);

        DB::table('accounts')->insert([
        	'username' => 'Dayella',
        	'name' => 'Dayella',
        	'email' => 'dayella@example.com',
        	'password' => 'dayella',
        ]);

        DB::table('accounts')->insert([
        	'username' => 'Anouk',
        	'name' => 'Anouk',
        	'email' => 'anouk@example.com',
        	'password' => 'anouk',
        ]);

        DB::table('accounts')->insert([
        	'username' => 'Nynke',
        	'name' => 'Nynke',
        	'email' => 'nynke@example.com',
        	'password' => 'nynke',
        ]);
    }
}
