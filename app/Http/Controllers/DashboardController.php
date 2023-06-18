<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use App\Models\Event;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{

    public function index()
    {
        return Inertia::render('Dashboard/Dashboard', [
            'establishment' => Establishment::where('user_id', Auth::user()->id)->with('photos')->first(),
        ]);
    }

    public function indexReviews()
    {
        return Inertia::render('Dashboard/Reviews', [
            'reviews' => Review::where('establishment_id',  Auth::user()->establishment->id)->with('user')->get(),
        ]);
    }

    public function indexPhotos()
    {
        return Inertia::render('Dashboard/Photos', [
            'establishment' => Establishment::where('user_id', Auth::user()->id)->with('photos')->first(),
        ]);
    }
    public function indexEvents()
    {
        return Inertia::render('Dashboard/Events', [
            'events' => Auth::user()->establishment->events,
        ]);
    }

    public function showEvent()
    {
        return Inertia::render('Dashboard/Dashboard', [
        ]);
    }


}
