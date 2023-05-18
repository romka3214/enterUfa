<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class RecommendationsController extends Controller
{

    public function index()
    {
        return Inertia::render('Recommendations/Index', [
            'all' => Establishment::with([
                'photos'
            ])->paginate(5)
        ]);
    }
}
