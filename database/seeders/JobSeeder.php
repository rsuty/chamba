<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonFilePath = file_get_contents('database/seeders/json/jobs.json');
        $jobs = json_decode($jsonFilePath, true);
        foreach ($jobs as $job) {
            Job::create([
                'name' => $job['name'],
            ]);
        }
    }
}
