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
            'video' => 'required|mimes:mp4|max:20480', // 20MB max
            'description' => 'nullable|string'
        ]);

        // Generate unique code
        $uniqueCode = Str::upper(Str::random(8));
        while (Marker::where('unique_code', $uniqueCode)->exists()) {
            $uniqueCode = Str::upper(Str::random(8));
        }

        // Store files
        $photoPath = $request->file('photo')->store('markers', 'public');
        $videoPath = $request->file('video')->store('videos', 'public');

        Marker::create([
            'unique_code' => $uniqueCode,
            'photo_path' => $photoPath,
            'video_path' => $videoPath,
            'description' => $request->description
        ]);

        return redirect()->route('markers.index')->with('success', 'Marker created successfully.');
    }

    public function show(Marker $marker)
    {
        return view('markers.show', [
            'marker' => $marker,
            'photoUrl' => Storage::url($marker->photo_path),
            'videoUrl' => Storage::url($marker->video_path)
        ]);
    }

    public function scan($code)
    {
        $marker = Marker::where('unique_code', $code)->firstOrFail();

        return view('markers.scan', [
            'marker' => $marker,
            'photoUrl' => Storage::url($marker->photo_path),
            'videoUrl' => Storage::url($marker->video_path)
        ]);
    }

    public function destroy(Marker $marker)
    {
        // Delete associated files
        Storage::disk('public')->delete($marker->photo_path);
        Storage::disk('public')->delete($marker->video_path);

        $marker->delete();
        return redirect()->route('markers.index')->with('success', 'Marker deleted successfully.');
    }
}
