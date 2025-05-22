<?php

namespace App\Http\Controllers;

use App\Models\Marker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;

class MarkerController extends Controller
{
    public function index()
    {
        $markers = Marker::latest()->get();
        return view('markers.index', compact('markers'));
    }

    public function create()
    {
        return view('markers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image',
            'video' => 'required|mimes:mp4',
            'description' => 'nullable|string',
        ]);

        // Simpan file
        $photoPath = $request->file('photo')->store('public/markers');
        $videoPath = $request->file('video')->store('public/videos');

        // Simpan ke DB
        $marker = Marker::create([
            'photo_path' => $photoPath,
            'video_path' => $videoPath,
            'description' => $request->description,
        ]);

        // Regenerate .mind file
        $this->generateMindFile();

        return redirect()->route('markers.index')->with('success', 'Marker created');
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
            'photo' => 'nullable|image',
            'video' => 'nullable|mimes:mp4',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            Storage::delete($marker->photo_path);
            $marker->photo_path = $request->file('photo')->store('public/markers');
        }

        if ($request->hasFile('video')) {
            Storage::delete($marker->video_path);
            $marker->video_path = $request->file('video')->store('public/videos');
        }

        $marker->description = $request->description;
        $marker->save();

        $this->generateMindFile();

        return redirect()->route('markers.index')->with('success', 'Marker updated');
    }

    public function destroy(Marker $marker)
    {
        Storage::delete([$marker->photo_path, $marker->video_path]);
        $marker->delete();

        $this->generateMindFile();

        return redirect()->route('markers.index')->with('success', 'Marker deleted');
    }

    private function generateMindFile()
    {
        $photos = Marker::pluck('photo_path')->map(function ($path) {
            return storage_path('app/' . $path);
        })->toArray();

        $output = storage_path('app/public/targets/output.mind');

        $process = new Process(array_merge([
            'mindar',
            'create-image-target',
            '--input',
        ], $photos, [
            '--output',
            $output,
        ]));

        $process->run();
    }

    public function showAR()
    {
        $markers = Marker::all();
        return view('markers.ar', compact('markers'));
    }
}
