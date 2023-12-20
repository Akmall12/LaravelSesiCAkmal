<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>"Akmal",
            'email'=>"Akmal@Akmal.com",
            'password'=>
        Hash::make('12345678'),
            //'level'=>'admin',
        ]);
    }
}
