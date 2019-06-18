<?php

use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pictures')->insert([
        'id'=> 1,
        'link' => "/img/aap.jpeg"
      ]);

      DB::table('pictures')->insert([
        'id'=> 2,
        'link' => "/img/alpaca.png"
      ]);

      DB::table('pictures')->insert([
        'id'=> 3,
        'link' => "/img/beest.png"
      ]);

      DB::table('pictures')->insert([
        'id'=> 4,
        'link' => "/img/geitje.png"
      ]);

      DB::table('pictures')->insert([
        'id'=> 5,
        'link' => "/img/giraffe.png"
      ]);

      DB::table('pictures')->insert([
        'id'=> 6,
        'link' => "/img/hond.png"
      ]);

      DB::table('pictures')->insert([
        'id'=> 7,
        'link' => "/img/kat.png"
      ]);

      DB::table('pictures')->insert([
        'id'=> 8,
        'link' => "/img/kleinBeest.png"
      ]);

      DB::table('pictures')->insert([
        'id'=> 9,
        'link' => "/img/konijn.png"
      ]);

    }
}
