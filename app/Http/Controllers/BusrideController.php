<?php

namespace App\Http\Controllers;

use App\Models\Busride;
use App\Http\Requests\StoreBusrideRequest;
use App\Http\Requests\UpdateBusrideRequest;
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
        return view('busrides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusrideRequest $request)
    {
        //
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
    public function update(UpdateBusrideRequest $request, Busride $busride)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Busride $busride)
    {
        //
    }
}
