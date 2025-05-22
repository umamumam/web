@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Marker</h2>

    <form action="{{ url('/markers/'.$marker->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Foto Marker (JPG)</label><br>
            <img src="{{ Storage::url($marker->photo_path) }}" width="200" class="mb-2"><br>
            <input type="file" name="photo" class="form-control">
        </div>

        <div class="mb-3">
            <label>Video (MP4)</label><br>
            <video width="200" controls class="mb-2">
                <source src="{{ Storage::url($marker->video_path) }}">
            </video><br>
            <input type="file" name="video" class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $marker->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('/markers') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
