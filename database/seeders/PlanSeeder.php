<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            'name' => "Free",
            'price' => "0.0",
            'duration' => "Unlimited",
            'description' => "Limited Features",
        ]);
        DB::table('plans')->insert(['name' => 'Trabajador', 'price' => '5.0', 'duration' => 'Mensual', 'description' => 'Accede a las opciones de trabajador']);
    }
}
