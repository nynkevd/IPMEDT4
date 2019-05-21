<?php

use Illuminate\Database\Seeder;

class InterestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vullen van de Interesse Tabel met begin data.

        $interesses = ['Muziek', 'Sport', 'Programmeren', 'Dieren', 'Eten', 'Reizen', 'Fotografie', 'Kunst', 'Computers', 'Lezen', 'Technologie', 'Netflix'];

        foreach($interesses as $interest){
        	DB::table('interests')->insert([
        		'interest' => $interest
        	]);
        }
    }
}
