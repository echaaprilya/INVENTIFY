<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // [
            //     'id_user' => 1,
            //     'id_role' => 1,
            //     'nama' => 'Yusufa Haidar',
            //     'email' => 'haidardewa@gmail.com',
            //     'no_hp' => '081234567890',
            //     'username' => 'RyuzeiGG',
            //     'password' => Hash::make('123456')
            // ],
            // [
            //     'id_user' => 2,
            //     'id_role' => 2,
            //     'nama' => 'Richard Santana',
            //     'email' => 'RSSantana@yahoo.com',
            //     'no_hp' => '087569321458',
            //     'username' => 'RSSantana',
            //     'password' => Hash::make('123456')
            // ],
            [
                'id_user' => 3,
                'id_role' => 1,
                'nama' => 'Gilang Pambudi',
                'email' => 'gilang@test.com',
                'no_hp' => '081234567890',
                'username' => 'gilang',
                'password' => Hash::make('123456')
            ],
            [
                'id_user' => 4,
                'id_role' => 1,
                'nama' => 'Echa Apriliya',
                'email' => 'echa@test.com',
                'no_hp' => '081234567890',
                'username' => 'echa',
                'password' => Hash::make('123456')
            ],
            [
                'id_user' => 5,
                'id_role' => 1,
                'nama' => 'Anisna Hilwa',
                'email' => 'anisna@test.com',
                'no_hp' => '081234567890',
                'username' => 'anisna',
                'password' => Hash::make('123456')
            ],
            [
                'id_user' => 6,
                'id_role' => 1,
                'nama' => 'Maulana Akbar',
                'email' => 'akbar@test.com',
                'no_hp' => '081234567890',
                'username' => 'akbar',
                'password' => Hash::make('123456')
            ],
        ];
        DB::table('users')->insert($data);
    }
}
