<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('festivals.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('festivals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'duration' => 'required' | 'max:255',
            'location' => 'required' | 'max:255',
            'festival_type' => 'required' | 'max:255',
            'price' => 'required' | 'numeric' | 'min:0',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        // Checks if the request has a file named 'picture'
        if ($request->hasFile('picture')) {
            // If the picture-inputfield has been filled the picture will be uploaded to ./public/storage/uploads
            $imagePath = $request->file('picture')->store('uploads', 'public');
        }

        $festival = Festival::create(array_merge(
            $validated,
            ['picture' => $imagePath]
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(festival $festival)
    {
        $festival = Festival::find($festival->id);
        return view('festivals.show', compact('festival'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(festival $festival)
    {
        $festival = Festival::find($festival->id);
        return view('festivals.show', compact('festival'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'duration' => 'required' | 'max:255',
            'location' => 'required' | 'max:255',
            'festival_type' => 'required' | 'max:255',
            'price' => 'required' | 'numeric' | 'min:0',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        // Checks if the request has a file named 'picture'
        if ($request->hasFile('picture')) {
            // If the picture-inputfield has been filled the picture will be uploaded to ./public/storage/uploads
            $imagePath = $request->file('picture')->store('uploads', 'public');
            $validate['afbeelding'] = $imagePath;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(festival $festival)
    {
        $festival = Festival::find($festival->id);
        $festival->delete();
    }
}
