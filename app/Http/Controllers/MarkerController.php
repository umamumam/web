<?php

namespace App\Http\Controllers;

use App\Models\Marker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MarkerController extends Controller
{
    public function index()
    {
        $markers = Marker::all();
        return view('markers.index', compact('markers'));
    }

    public function create()
    {
        return view('markers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'required|mimes:mp4|max:20480',
            'description' => 'nullable|string'
        ]);

        // Generate unique code
        $uniqueCode = Str::upper(Str::random(8));
        while (Marker::where('unique_code', $uniqueCode)->exists()) {
            $uniqueCode = Str::upper(Str::random(8));
        }

        // Get next number for files
        $nextMarkerNumber = Marker::count() + 1;

        // Store files with sequential names
        $photoExtension = $request->file('photo')->extension();
        $videoExtension = $request->file('video')->extension();

        $photoName = 'marker' . $nextMarkerNumber . '.' . $photoExtension;
        $videoName = 'video' . $nextMarkerNumber . '.' . $videoExtension;

        // Store files with custom names
        $photoPath = $request->file('photo')->storeAs('markers', $photoName, 'public');
        $videoPath = $request->file('video')->storeAs('videos', $videoName, 'public');

        Marker::create([
            'unique_code' => $uniqueCode,
            'photo_path' => 'markers/' . $photoName,
            'video_path' => 'videos/' . $videoName,
            'description' => $request->description
        ]);

        return redirect()->route('markers.index')->with('success', 'Marker created successfully.');
    }

    public function show(Marker $marker)
    {
        return view('markers.show', compact('marker'));
    }

    public function edit(Marker $marker)
    {
        return view('markers.edit', compact('marker'));
    }

    public function update(Request $request, Marker $marker)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|mimes:mp4|max:20480',
            'description' => 'nullable|string',
        ]);

        $data = ['description' => $request->description];
        $currentNumber = $marker->id; // Menggunakan ID marker sebagai nomor urut

        // Handle photo update
        if ($request->hasFile('photo')) {
            // Delete old photo
            Storage::disk('public')->delete($marker->photo_path);

            // Generate new photo name
            $photoExtension = $request->file('photo')->extension();
            $photoName = 'marker' . $currentNumber . '.' . $photoExtension;

            // Store new photo
            $photoPath = $request->file('photo')->storeAs('markers', $photoName, 'public');
            $data['photo_path'] = 'markers/' . $photoName;
        }

        // Handle video update
        if ($request->hasFile('video')) {
            // Delete old video
            Storage::disk('public')->delete($marker->video_path);

            // Generate new video name
            $videoExtension = $request->file('video')->extension();
            $videoName = 'video' . $currentNumber . '.' . $videoExtension;

            // Store new video
            $videoPath = $request->file('video')->storeAs('videos', $videoName, 'public');
            $data['video_path'] = 'videos/' . $videoName;
        }

        $marker->update($data);

        return redirect()->route('markers.index')->with('success', 'Marker updated successfully.');
    }

    public function destroy(Marker $marker)
    {
        // Delete associated files
        Storage::disk('public')->delete($marker->photo_path);
        Storage::disk('public')->delete($marker->video_path);

        $marker->delete();
        return redirect()->route('markers.index')->with('success', 'Marker deleted successfully.');
    }

    public function showAR()
    {
        $markers = Marker::all();
        return view('markers.ar', compact('markers'));
    }
}
