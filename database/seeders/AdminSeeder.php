<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
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
            'username' => 'gunAtp',
            'name' => 'Gun Atthaphan',
            'address' => 'jln.tikus no.49',
            'email' => 'gunAtp@gmail.com',
            'no_handphone' => '085132715533',
            'password' => Hash::make('gunnie')
        ],
        [
            'id' => '00201',
            'username' => 'tumcial',
            'name' => 'Off Jumpol',
            'dddress' => 'jln.off No.20',
            'email' => 'jumpol@gmail.com',
            'no_handphone' => '082144587256',
            'password' => Hash::make('tumcial')
        ]

        ]);
        }
    }