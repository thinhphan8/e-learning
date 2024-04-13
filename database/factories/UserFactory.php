<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'gender'        => $this->faker->randomElement(['Male', 'Female']),
            'nationality'   => 'World',
            'phone'         => 'Ex: 123 4567 8999',
            'address'       => '8888 Street',
            'address2'      => 'Same',
            'city'          => 'Hanoi',
            'zip'           => '88888',
            'photo'         => null,
            'role'          => 'admin',
        ];
    }

    /**
     * Define a state to create a student user.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function student()
    {
        return $this->state(function (array $attributes) {
            return [
                'email' => 'student@edu.com',
                'role' => 'student',
            ];
        });
    }

    /**
     * Define a state to create a teacher user.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function teacher()
    {
        return $this->state(function (array $attributes) {
            return [
                'email' => 'teacher@edu.com',
                'role' => 'teacher',
            ];
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
