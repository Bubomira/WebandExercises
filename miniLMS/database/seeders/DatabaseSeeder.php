<?php

namespace Database\Seeders;

use App\Models\Lecture;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Course::factory(10)->has(Lecture::factory()->count(5))->create();
    }
}
