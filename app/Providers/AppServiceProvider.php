<?php

namespace App\Providers;

use Faker\Generator;
use Faker\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function ()
        {
            $faker = Factory::create();
            $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));
            return $faker;
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('ru');
    }
}
