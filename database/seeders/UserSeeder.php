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
        DB::table('users')-> insert([
            [
                'id' => '00409',
                'name' => 'Gun Atthaphan',
                'email' => 'gunAtp@gmail.com',
                'password' => Hash::make('gunnie')
            ],
            [
                'id' => '00201',
                'name' => 'Off Jumpol',
                'email' => 'jumpol@gmail.com',
                'password' => Hash::make('tumcial')
            ]
       ]);
    }
}