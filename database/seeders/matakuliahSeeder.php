<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::tanle('matakuliahs')->insert([
            'kode_mk'=>"232323",
            'nama_mk'=>'mobile computing',
            'sks'=>'3',
            'semester'=>'ganjil',
        ]);
    }
}
