<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BorrowRequest>
 */
class BorrowRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" =>fake()->randomNumber(1),
            "borrow_date" =>fake()->date(),
            "expiration_date" =>fake()->date(),
            "status" =>fake()->randomElement(['pending','borrowed','rejected','returned']),
        ];
    }
}
