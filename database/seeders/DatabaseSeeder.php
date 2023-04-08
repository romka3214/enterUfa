<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Establishment;
use App\Models\Event;
use App\Models\User;
use App\Enum\UserRoleEnum;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'role' => UserRoleEnum::MODERATOR
        ]);
        User::factory()->create([
            'name' => 'user',
            'email' => 'user@mail.ru',
            'role' => UserRoleEnum::USER
        ]);
        User::factory()->create([
            'name' => 'owner',
            'email' => 'owner@mail.ru',
            'role' => UserRoleEnum::OWNER
        ]);
        Establishment::factory()
        ->count(100)
        ->hasPhotos(5)
        ->hasReviews(10)
        ->has(Event::factory()
            ->count(5)
            ->hasPhotos(3))
        ->create();
        
    }
}
