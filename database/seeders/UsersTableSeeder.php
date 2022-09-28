<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fullname' => 'Admin Bibit Sriwedari',
                'username' => 'admin',
                'email' => 'admin@bibitsriwedari.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'fullname' => 'Warung Bibit Sriwedari',
                'username' => 'wbs',
                'email' => 'wbs@gmail.com',
                'password' => Hash::make('wbs'),
                'role' => 'vendor',
                'status' => 'active',
            ],
            [
                'fullname' => 'Rapli',
                'username' => 'rapli',
                'email' => 'rapli@gmail.com',
                'password' => Hash::make('rapli'),
                'role' => 'customer',
                'status' => 'active',
            ],
        ]);
    }
}
