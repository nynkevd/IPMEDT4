<?php

use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('stations')->insert([
          'station' => "Leiden Centraal"
        ]);

        DB::table('stations')->insert([
          'station' => "Rotterdam Centraal"
        ]);

        DB::table('stations')->insert([
          'station' => "Amsterdam Centraal"
        ]);

        DB::table('stations')->insert([
          'station' => "Den Haag Centraal"
        ]);

        DB::table('stations')->insert([
          'station' => "Nieuw-Vennep"
        ]);

        DB::table('stations')->insert([
          'station' => "Leiden Lammenschans"
        ]);

        DB::table('stations')->insert([
          'station' => "Alphen aan de Rijn"
        ]);

        DB::table('stations')->insert([
          'station' => "De Vink"
        ]);

        DB::table('stations')->insert([
          'station' => "Voorschoten"
        ]);

        DB::table('stations')->insert([
          'station' => "Den Haag Laan van NOI"
        ]);

        DB::table('stations')->insert([
          'station' => "Bodegraven"
        ]);

        DB::table('stations')->insert([
          'station' => "Woerden"
        ]);

        DB::table('stations')->insert([
          'station' => "Utrecht Centraal"
        ]);
        DB::table('stations')->insert([
          'station' => "Amsterdam Sloterdijk"
        ]);
        DB::table('stations')->insert([
          'station' => "Den Haag Hollands Spoor"
        ]);

    }
}
