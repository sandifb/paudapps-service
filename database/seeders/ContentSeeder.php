<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1Membaca, 2Menulis, 3Berhitung, 4Bercerita
        // 5Mengaji, 6KisahNabi, 7BahasaInggris, 8BahasaArab

        DB::table('contents')->insert([
            'user_id' => 1,
            'title' => 'Membaca A-z Part 1',
            'code' => 'ffCz9a7SrTw',
            'type' => 1,
            'status' => 3
        ]);

        DB::table('contents')->insert([
            'user_id' => 1,
            'title' => 'Membaca A-z Part 2',
            'code' => 'id5Qd7qtadA',
            'type' => 1,
            'status' => 3
        ]);

        DB::table('contents')->insert([
            'user_id' => 1,
            'title' => 'Membaca A-z Part 3',
            'code' => 'IP82kMouR2Y',
            'type' => 1,
            'status' => 3
        ]);


        DB::table('contents')->insert([
            'user_id' => 1,
            'title' => 'Mengenal Garis Part 1',
            'code' => 'xEpTNnq69JQ',
            'type' => 2,
            'status' => 3
        ]);

        DB::table('contents')->insert([
            'user_id' => 1,
            'title' => 'Mengenal Garis Part 2',
            'code' => 'O0VP7ZDSbbM',
            'type' => 2,
            'status' => 3
        ]);

    }
}
