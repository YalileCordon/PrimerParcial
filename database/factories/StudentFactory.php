<?php

namespace Database\Factories;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'age' => $this->faker->numberBetween(18, 60),
            'email' => $this->faker->unique()->safeEmail,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'birthdate' => $this->faker->date('Y-m-d', '-20 years'), 
            'status' => $this->faker->boolean(80) 
        ];
    }
}
