<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index(){
        $events = Event::with(['photos'])
            ->get();
        return Inertia::render('Event/Index', [
            'all' => $events
        ]);
    }

    public function show(int $id){
        $event = Event::with(['photos'])->find($id);
        return Inertia::render('Event/Single', [
            'event' => $event
        ]);
    }
}
