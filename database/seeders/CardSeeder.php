<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_covers')->insert([
            'color_id' => 1,
            'cover_image' => 'cover_image_1.png'
        ]);

        DB::table('card_covers')->insert([
            'color_id' => 1,
            'cover_image' => 'cover_image_2.png'
        ]);

    }
}
