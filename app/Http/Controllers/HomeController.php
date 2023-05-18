<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{

    public function index()
    {
        return Inertia::render('Home', [
            'est' => Establishment::with([
                'photos',
                'events' =>[
                    'photos'
                ]
            ])->paginate(5)
        ]);
    }
}
