<?php

namespace Database\Factories;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'driver_id' => $this->faker->numberBetween(1, 17),
            'conductor_id' => $this->faker->numberBetween(1, 38),
            'bus_id' => $this->faker->numberBetween(1, 28),
            'route_id' => $this->faker->numberBetween(1, 24),
            'departure_datetime' => $this->faker->dateTimeBetween('now', '+1 week'),
            'estimated_duration' => $this->faker->numberBetween(3, 7),
            'status' => $this->faker->randomElement(['pending', 'ongoing', 'completed', 'cancelled']),
        ];
    }
}
