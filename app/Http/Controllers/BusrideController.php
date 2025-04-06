<?php

namespace App\Http\Controllers;

use App\Models\Busride;
use App\Http\Requests\StoreBusrideRequest;
use App\Http\Requests\UpdateBusrideRequest;
use App\Models\Festival;
use Illuminate\Http\Request;

class BusrideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $busrides = Busride::all();
        return view('busrides.index', compact('busrides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $festivals = Festival::all();
        return view('busrides.create', compact('festivals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusrideRequest $request)
    {
        $request->validate([
            'festival_id' => 'required|exists:festivals,festival_id',
            'duration' => 'required|string|max:255',
            'departure_time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'date' => 'required|date'
        ]);

        Busride::create($request->all());

        return redirect()->route('magagement.busrides');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $busride = Busride::find($id);
        return view('busrides.show', compact('busride'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $busride = Busride::find($id);
        return view('busrides.edit', compact('busride'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusrideRequest $request, $id)
    {
        $validatedform = $request->validate([
            'festival_id' => 'required|exists:festivals,festival_id',
            'duration' => 'required|string|max:255',
            'departure_time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'date' => 'required|date'
        ]);
        $busride = Busride::find($id);

        $busride->update($validatedform);

        return redirect()->route('busrides.index');
    }

    /**
     * Remove the specified resource from storage.
     */
}
