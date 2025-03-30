<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */

     protected $model = Destination::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->city,
            'country' => $this->faker->country,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 50, 2000),
        ];
    }
}
