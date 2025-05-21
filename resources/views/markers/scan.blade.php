@extends('layouts.app')

@section('content')
<a-scene embedded arjs='sourceType: webcam; detectionMode: mono_and_matrix; matrixCodeType: 3x3;'>
    <a-marker type='pattern' url="{{ asset('storage/'.$marker->photo_path) }}">
        <a-video src="{{ asset('storage/'.$marker->video_path) }}" width="1" height="1" position="0 0.5 0" rotation="-90 0 0"></a-video>
    </a-marker>
    <a-entity camera></a-entity>
</a-scene>

<div style="position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background: white; padding: 10px; border-radius: 5px;">
    <p>Scan the marker to see the AR content</p>
</div>
@endsection
