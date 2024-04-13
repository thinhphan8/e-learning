<?php

namespace Database\Factories;

use App\Models\StudentParentInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentParentInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentParentInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => 2,
            'father_name' => $this->faker->name('male'),
            'father_phone' => $this->faker->phoneNumber,
            'mother_name' => $this->faker->name('female'),
            'mother_phone' => $this->faker->phoneNumber,
            'parent_address' => $this->faker->address,
        ];
    }
}
