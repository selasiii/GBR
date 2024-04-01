<?php

namespace Database\Factories;

// database/factories/DriverFactory.php

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DriverFactory extends Factory
{
    protected $model = Driver::class;

    public function definition()
    {
        return [
            'licence_number' => $this->faker->unique()->numerify('LIC###'),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'password' => bcrypt('password'), // you might want to change this to use Hash facade
            'gender' => $this->faker->randomElement(['male', 'female']),
            'date_of_birth' => $this->faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
            'remember_token' => Str::random(10),
        ];
    }
}
