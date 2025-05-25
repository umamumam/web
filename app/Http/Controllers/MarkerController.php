<?php

namespace App\Http\Controllers;

use App\Models\Marker;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MarkerController extends Controller
{
    public function index()
    {
        $markers = Marker::with('photos')->get();
        return view('markers.index', compact('markers'));
    }

    public function create()
    {
        return view('markers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photos.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'required|mimes:mp4|max:20480',
            'description' => 'nullable|string'
        ]);

        // Generate unique code
        $uniqueCode = Marker::generateUniqueCode();

        // Get next number for files
        $nextMarkerNumber = Marker::count() + 1;

        // Store video
        $videoExtension = $request->file('video')->extension();
        $videoName = 'video' . $nextMarkerNumber . '.' . $videoExtension;
        $videoPath = $request->file('video')->storeAs('videos', $videoName, 'public');

        // Create marker
        $marker = Marker::create([
            'unique_code' => $uniqueCode,
            'video_path' => 'videos/' . $videoName,
            'description' => $request->description
        ]);

        // Store photos
        foreach ($request->file('photos') as $index => $photo) {
            $photoExtension = $photo->extension();
            $photoName = 'marker' . $nextMarkerNumber . '_' . ($index + 1) . '.' . $photoExtension;
            $photoPath = $photo->storeAs('markers', $photoName, 'public');

            Photo::create([
                'marker_id' => $marker->id,
                'path' => 'markers/' . $photoName,
                'order' => $index + 1
            ]);
        }

        return redirect()->route('markers.index')->with('success', 'Marker created successfully.');
    }

    public function show(Marker $marker)
    {
        $marker->load('photos');
        return view('markers.show', compact('marker'));
    }

    public function edit(Marker $marker)
    {
        $marker->load('photos');
        return view('markers.edit', compact('marker'));
    }

    public function update(Request $request, Marker $marker)
    {
        $request->validate([
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|mimes:mp4|max:20480',
            'description' => 'nullable|string',
        ]);

        $data = ['description' => $request->description];
        $currentNumber = $marker->id;

        // Handle video update
        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($marker->video_path);
            $videoExtension = $request->file('video')->extension();
            $videoName = 'video' . $currentNumber . '.' . $videoExtension;
            $videoPath = $request->file('video')->storeAs('videos', $videoName, 'public');
            $data['video_path'] = 'videos/' . $videoName;
        }

        $marker->update($data);

        // Handle photo updates
        if ($request->hasFile('photos')) {
            // Delete old photos
            foreach ($marker->photos as $photo) {
                Storage::disk('public')->delete($photo->path);
                $photo->delete();
            }

            // Store new photos
            foreach ($request->file('photos') as $index => $photo) {
                $photoExtension = $photo->extension();
                $photoName = 'marker' . $currentNumber . '_' . ($index + 1) . '.' . $photoExtension;
                $photoPath = $photo->storeAs('markers', $photoName, 'public');

                Photo::create([
                    'marker_id' => $marker->id,
                    'path' => 'markers/' . $photoName,
                    'order' => $index + 1
                ]);
            }
        }

        return redirect()->route('markers.index')->with('success', 'Marker updated successfully.');
    }

    public function destroy(Marker $marker)
    {
        // Delete associated files
        Storage::disk('public')->delete($marker->video_path);
        foreach ($marker->photos as $photo) {
            Storage::disk('public')->delete($photo->path);
        }

        $marker->delete();
        return redirect()->route('markers.index')->with('success', 'Marker deleted successfully.');
    }

    public function showAR()
    {
        $markers = Marker::with('photos')->get();
        return view('markers.ar', compact('markers'));
    }
}
