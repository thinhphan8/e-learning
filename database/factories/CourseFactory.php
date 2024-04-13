<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' => $this->faker->sentence,
            'course_type' => $this->faker->randomElement(['Core', 'General', 'Elective', 'Optional']),
            'class_id' => 1,
            'semester_id' => 1,
            'session_id' => 1,
        ];
    }
}
