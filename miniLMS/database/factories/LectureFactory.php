<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecture>
 */
class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->word(),
            'description'=>fake()->paragraph(),
            'url'=>'https://www.youtube.com/embed/rIfdg_Ot-LI?si=zOmTJAAYdjDyiil7',
            'order'=>fake()->randomDigitNotZero(),
        ];
    }
}
