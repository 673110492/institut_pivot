<?php

namespace Database\Factories;

use App\Models\Destination;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Ticket::class;

    public function definition(): array
    {
        return [
            'destination_id' => Destination::factory(),
            'departure_time' => $this->faker->dateTimeBetween('now', '+1 month'),
            'departure_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'arrival_date' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
            'price' => $this->faker->randomFloat(2, 50, 500),
            'available_seats' => $this->faker->numberBetween(1, 100),
        ];
    }
}
