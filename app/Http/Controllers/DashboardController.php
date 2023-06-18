<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use App\Models\Event;
use App\Models\Review;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request;

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
    public function deleteReview()
    {
        return Inertia::render('Dashboard/Reviews', [
            'reviews' => Review::where('establishment_id',  Auth::user()->establishment->id)->with('user')->get(),
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
    public function addEvent()
    {
        return Inertia::render('Dashboard/Dashboard', [
        ]);
    }
    public function deleteEvent()
    {
        return Inertia::render('Dashboard/Dashboard', [
        ]);
    }



    public function indexPhotos()
    {
        return Inertia::render('Dashboard/Photos', [
            'establishment' => Establishment::where('user_id', Auth::user()->id)->with('photos')->first(),
        ]);
    }
    public function addPhoto()
    {
        return Inertia::render('Dashboard/Photos', [
            'establishment' => Establishment::where('user_id', Auth::user()->id)->with('photos')->first(),
        ]);
    }
    public function deletePhoto()
    {
        return Inertia::render('Dashboard/Photos', [
            'establishment' => Establishment::where('user_id', Auth::user()->id)->with('photos')->first(),
        ]);
    }



    public function indexTags()
    {
        return Inertia::render('Dashboard/Tags', [
            'establishmentTags' => Auth::user()->establishment->tags,
            'tags' => Tag::when(Request::input('query'), function ($query) {
                $query->where('name', 'like', '%' . Request::input('query') . '%');
            })->get()
        ]);
    }
    public function addTag()
    {
        return Inertia::render('Dashboard/Photos', [
            'establishment' => Establishment::where('user_id', Auth::user()->id)->with('photos')->first(),
        ]);
    }
    public function deleteTag()
    {
        return Inertia::render('Dashboard/Photos', [
            'establishment' => Establishment::where('user_id', Auth::user()->id)->with('photos')->first(),
        ]);
    }





}
