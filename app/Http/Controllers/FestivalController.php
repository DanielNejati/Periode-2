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
      $festivals = Festival::all();
        return view('festivals.index', compact('festivals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('festivals.create');
    }

    public function variabelFestivals()
    {
        $festivals = Festival::all();
        return view('busrides.index', compact('festivals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'festival_type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Checks if the request has a file named 'picture'
//        if ($request->hasFile('picture')) {
//            $imagePath = $request->file('picture')->store('uploads', 'public');
//        } else {
//            $imagePath = null;
//        }

        $imagePath = null;

        if ($request->hasFile('picture')) {
            try {
                $imagePath = $request->file('picture')->store('uploads', 'public');
                \Log::info('Image uploaded successfully: ' . $imagePath);
            } catch (\Exception $e) {
                \Log::error('Image upload failed: ' . $e->getMessage());
            }
        } else {
            \Log::info('No picture uploaded.');
        }

        $festival = Festival::create(array_merge(
            $validated,
            ['picture' => $imagePath]
        ));

        // Redirect or return response
        return redirect()->route('management.indexFestival')->with('success', 'Festival created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $festival = Festival::find($id);
        return view('festivals.show', compact('festival'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $festival = Festival::findOrFail($id);
        return view('festivals.edit', compact('festival'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'festival_type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Delete old image (optional)
            $oldImage = Festival::find($request->id)->image;
            if ($oldImage && file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage));
            }

            // Move to 'public/uploads'
            $image->move(public_path('storage/uploads'), $filename);

            // Save the correct path (e.g., 'uploads/filename.jpg')
            $festival = Festival::find($request->id);
            $festival->picture = 'uploads/' . $filename;
            $festival->save();
        }
        return redirect()->route('management.indexFestival')->with('success', 'Festival updated successfully.');

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
