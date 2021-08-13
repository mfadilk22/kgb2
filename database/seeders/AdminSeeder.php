<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        // insert data ke table pegawai
        DB::table('admin')->insert([[
            'nip'=>'1173021305970001',
            'user'=>'asni',
            'password'=>'12345678'
        ],
        [
            'nip'=>'1173021305970002',
            'user'=>'Fadil',
            'password'=>'123456789'
        ]]);
    }
}
