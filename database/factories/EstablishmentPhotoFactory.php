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
            'url' => 'https://sun9-48.userapi.com/impg/NXdOPv97CITBXtWNY03fahvmWcjpVHeeLUBCKQ/0JSfEvOEqUE.jpg?size=666x500&quality=96&sign=01113f5b2ac162992f47cbbfc4ce82bc&type=album'
        ];
    }
}
