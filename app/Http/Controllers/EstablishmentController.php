<?php

namespace App\Http\Controllers;

use App\Models\Establishment;

use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Illuminate\Database\Eloquent\Builder;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(Request::input('query')){
            $establishment = Establishment::search(Request::input('query'))
                ->query(fn (Builder $query) => $query->with('photos'))
                ->get();
        } else{
            $establishment = Establishment::with('photos')->get();
        }

        return Inertia::render('Establishment/Index', [
            'establishments' => $establishment->sortBy('average_score')
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string',
        ]);
        $result = Establishment::search($request->get('query'))->get();

        return back()->with(['establishments' => $result, 'status' => 'test']);
    }

//    public function search(Request $request)
//    {
//        $establishment = Establishment::with([
//            'photos',
//            'tags',
//            'events' => [
//                'photos'
//            ]
//        ])->find($id);
//    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $establishment = Establishment::with([
            'photos',
            'tags',
            'reviews' => [
                'user'
            ],
            'events' => [
                'photos'
            ]
        ])->find($id);
        return Inertia::render('Establishment/Single', [
            'establishment' => $establishment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
