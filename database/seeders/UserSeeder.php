<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'BAOUROU Beaufaye',
            'email' => 'baouroubeaufaye881@gmail.com',
            'password' => Hash::make('benbenben'),
        ]);

        DB::table('users')->insert([
            'name' => 'HAIDARA Ahmed',
            'email' => 'haidara@gmail.com',
            'password' => Hash::make('haidara1'),
        ]);

        DB::table('users')->insert([
            'name' => 'MILAMEM',
            'email' => 'milamem@gmail.com',
            'password' => Hash::make('milamem2'),
        ]);
    }
}
