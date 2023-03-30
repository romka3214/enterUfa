<?php

namespace Database\Factories;

use App\Models\Establishment;
use App\Models\EstablishmentPhoto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Establishment_photo>
 */
class EstablishmentPhotoFactory extends Factory
{


    protected $model = EstablishmentPhoto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->imageUrl($width = 200, $height = 600),
        ];
    }
}
