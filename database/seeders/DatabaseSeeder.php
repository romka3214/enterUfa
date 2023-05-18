<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Establishment;
use App\Models\Event;
use App\Models\User;
use App\Models\UserTag;
use App\Models\EstablishmentTag;
use App\Models\Tag;

use App\Enum\UserRoleEnum;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Админ',
            'email' => 'admin@mail.ru',
            'role' => UserRoleEnum::MODERATOR
        ]);
        User::factory()->create([
            'name' => 'Пользователь',
            'email' => 'user@mail.ru',
            'role' => UserRoleEnum::USER
        ]);
        User::factory()->create([
            'name' => 'Владелец',
            'email' => 'owner@mail.ru',
            'role' => UserRoleEnum::OWNER
        ]);

        Tag::factory()->create([
            'name' => 'Рок'
        ]);
        Tag::factory()->create([
            'name' => 'Кошки'
        ]);
        Tag::factory()->create([
            'name' => 'Крафтовое пиво'
        ]);
        Tag::factory()->create([
            'name' => 'Классическая музыка'
        ]);
        Tag::factory()->create([
            'name' => 'Металл'
        ]);

        Establishment::factory()
        ->count(15)
        ->hasPhotos(5)
        ->hasReviews(3)
        ->has(Event::factory()
            ->count(3)
            ->hasPhotos(2))
        ->create();

        UserTag::factory()->create([
            'user_id' => 2,
            'tag_id' => 1
        ]);
        UserTag::factory()->create([
            'user_id' => 2,
            'tag_id' => 2
        ]);

        EstablishmentTag::factory()->create([
            'establishment_id' => 1,
            'tag_id' => 1
        ]);
        EstablishmentTag::factory()->create([
            'establishment_id' => 1,
            'tag_id' => 2
        ]);
        EstablishmentTag::factory()->create([
            'establishment_id' => 1,
            'tag_id' => 3
        ]);


    }
}
