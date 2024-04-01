<?php

namespace Database\Factories;

use App\Models\Bus;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reg_number' => $this->faker->unique()->regexify('[A-Z0-9]{10}'), // Example: ABC123XYZ9
            'capacity' => $this->faker->numberBetween(20, 100),
            'model' => $this->faker->word,
            'make' => $this->faker->word,
            'year' => $this->faker->year,
            'color' => $this->faker->colorName,
            'condition' => $this->faker->randomElement(['working', 'faulty', 'damaged']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
