<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'ابو آدم',
            'email' => 'noohaboalkanj@gmail.com',
            'password' => Hash::make('nooh1986'),
        ]);
        DB::table('users')->insert([
            'name' => 'ابو يوسف',
            'email' => 'husenteawi@gmail.com',
            'password' => Hash::make('hsry1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'عبدالملك طياوي',
            'email' => 'abdalmalek.t92@gmail.com',
            'password' => Hash::make('asel2021'),
        ]);
    }
}
