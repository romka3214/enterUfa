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
        $est = Establishment::with(['photos'])
            ->get();
        return Inertia::render('Recommendations/Index', [
            'all' => $est->sortBy('average_score')
        ]);
    }
}
