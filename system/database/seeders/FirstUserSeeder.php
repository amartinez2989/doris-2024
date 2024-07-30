<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB,Hash;
class FirstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Andrés Martínez',
            'email' => 'soporte.amartinez@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
