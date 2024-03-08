<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Trabajo;
use Illuminate\Database\Seeder;

class TrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonFilePath = file_get_contents('database/seeders/json/jobs.json');
        $jobs = json_decode($jsonFilePath, true);
        foreach ($jobs as $job) {
            Trabajo::create([
                'name' => $job['name'],
            ]);
        }
    }
}
