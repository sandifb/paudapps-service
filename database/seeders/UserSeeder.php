<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Iam Admin',
            'email' => 'admin@paudapps.id',
            'password' => Hash::make('1234abcd'),
            'role' => 1,
            'level' => 1
        ]);
            DB::table('user_details')->insert([
                'user_id' => 1
            ]);


        DB::table('users')->insert([
            'name' => 'Iam Finance',
            'email' => 'finance@paudapps.id',
            'password' => Hash::make('1234abcd'),
            'role' => 1,
            'level' => 2
        ]);
            DB::table('user_details')->insert([
                'user_id' => 2
            ]);


        DB::table('users')->insert([
            'name' => 'Iam Content',
            'email' => 'content@paudapps.id',
            'password' => Hash::make('1234abcd'),
            'role' => 1,
            'level' => 4
        ]);
            DB::table('user_details')->insert([
                'user_id' => 3
            ]);

    }
}
