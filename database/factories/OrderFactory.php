<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_id' => Car::factory(),
            'customer_name' => fake()->name(),
            'customer_email' => fake()->safeEmail(),
            'quantity' => fake()->numberBetween(1, 5),
            'total_price' => fake()->numberBetween(50_000, 500_000),
            'notes' => null,
            'status' => 'pending',
        ];
    }
}
