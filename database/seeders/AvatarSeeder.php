<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            'avatar_image' => 'avatar_image_1.png'
        ]);

        DB::table('avatars')->insert([
            'avatar_image' => 'avatar_image_2.png'
        ]);

    }
}
