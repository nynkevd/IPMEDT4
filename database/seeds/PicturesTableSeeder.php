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
        'link' => "https://upload.wikimedia.org/wikipedia/commons/2/22/Pictor_A_composite.jpg"
      ]);

      DB::table('pictures')->insert([
        'id'=> 2,
        'link' => "https://purperme.files.wordpress.com/2018/04/image-1-1.jpg?w=336&h=336&crop=1"
      ]);

      DB::table('pictures')->insert([
        'id'=> 3,
        'link' => "https://is4-ssl.mzstatic.com/image/thumb/Purple128/v4/54/4f/9b/544f9b86-5073-2793-f825-699c9f547375/AppIcon-1x_U007emarketing-0-85-220-0-5.png/246x0w.jpg"
      ]);

    }
}
