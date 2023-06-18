<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\RecommendationsController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserLKController;
use App\Http\Controllers\DashboardController;

use App\Models\Establishment;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/establishments', [EstablishmentController::class, 'index'])->name('establishments');

    Route::get('/establishments/{id}', [EstablishmentController::class, 'show'])->name('establishments.show');

    Route::post('/establishments/reviewAdd', [EstablishmentController::class, 'addReview'])->name('establishments.review.store');


    Route::get('/events', [EventController::class, 'index'])->name('events');
    Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');


    Route::get('/recommendations', [RecommendationsController::class, 'index'])->name('recommendations');

    Route::get('/lk', [UserLKController::class, 'index'])->name('profileLK.show');

});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/reviews', [DashboardController::class, 'indexReviews'])->name('dashboard.reviews');
    Route::get('/dashboard/review/delete/{id}', [DashboardController::class, 'deleteReview'])->name('dashboard.review.delete');


    Route::get('/dashboard/events', [DashboardController::class, 'indexEvents'])->name('dashboard.events');
    Route::get('/dashboard/event/{id}', [DashboardController::class, 'showEvent'])->name('dashboard.event.show');
    Route::get('/dashboard/event/add', [DashboardController::class, 'addEvent'])->name('dashboard.event.add');
    Route::get('/dashboard/event/delete/{id}', [DashboardController::class, 'deleteEvent'])->name('dashboard.event.delete');


    Route::get('/dashboard/photos', [DashboardController::class, 'indexPhotos'])->name('dashboard.photos');
    Route::post('/dashboard/photos/add', [DashboardController::class, 'addPhoto'])->name('dashboard.photo.add');
    Route::post('/dashboard/photos/delete/{id}', [DashboardController::class, 'addPhoto'])->name('dashboard.photo.delete');

    Route::get('/dashboard/tags', [DashboardController::class, 'indexTags'])->name('dashboard.tags');
    Route::post('/dashboard/tags/add', [DashboardController::class, 'addTag'])->name('dashboard.tag.add');
    Route::post('/dashboard/tags/delete', [DashboardController::class, 'deleteTag'])->name('dashboard.tag.delete');

    Route::post('/tagsSearch', [TagController::class, 'search'])->name('tags.search');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
