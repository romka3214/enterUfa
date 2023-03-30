<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween($min = 300, $max = 6000),
            'date_start' => $this->faker->dateTimeBetween('+0 days', '+4 days'),
            'date_end' => $this->faker->dateTimeBetween('+5 days', '+6 days'),
        ];
    }
}
