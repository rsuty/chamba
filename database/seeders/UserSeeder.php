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
        DB::table('users')->insert([
            'name' => 'worker',
            'email' => 'worker@worker.com',
            'password' => Hash::make('worker'),
            'phone_number' => '6121224123',
            'speciality' => 'Albanil',
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'client',
            'email' => 'client@client.com',
            'password' => Hash::make('client'),
            'phone_number' => '6121224123',
        ]);
    }
}
