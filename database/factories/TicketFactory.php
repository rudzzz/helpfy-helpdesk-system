<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'status' => 'open',
            'priority' => fake()->randomElement(['low', 'medium', 'high']),
            'user_id'=> fake()->numberBetween(1, 4),
            'category_id' => fake()->numberBetween(1, 4)
        ];
    }
}
