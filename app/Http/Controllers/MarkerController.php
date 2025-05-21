<?php

namespace App\Http\Controllers;

use App\Models\Marker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            // 'unique_code' => 'required|unique:markers', // Hapus baris ini
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'required|mimes:mp4,mov,ogg,webm|max:20480',
            'description' => 'nullable'
        ]);

        $photoPath = $request->file('photo')->store('marker_images', 'public');
        $videoPath = $request->file('video')->store('marker_videos', 'public');

        Marker::create([
            // 'unique_code' => $request->unique_code, // Hapus baris ini
            'photo_path' => $photoPath,
            'video_path' => $videoPath,
            'description' => $request->description
        ]);

        return redirect()->route('markers.index')->with('success', 'Marker created successfully.');
    }

    public function show(Marker $marker)
    {
        return view('markers.show', compact('marker'));
    }

    public function scan($code)
    {
        $marker = Marker::where('unique_code', $code)->firstOrFail();
        return view('markers.scan', compact('marker'));
    }
    public function destroy(Marker $marker)
    {
        // Delete associated files
        if (Storage::disk('public')->exists($marker->photo_path)) {
            Storage::disk('public')->delete($marker->photo_path);
        }
        if (Storage::disk('public')->exists($marker->video_path)) {
            Storage::disk('public')->delete($marker->video_path);
        }

        $marker->delete();
        return redirect()->route('markers.index')->with('success', 'Marker deleted successfully.');
    }
}
