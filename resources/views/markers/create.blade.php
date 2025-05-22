@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Marker</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada kesalahan input:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/markers') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Foto Marker (JPG)</label>
            <input type="file" name="photo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Video (MP4)</label>
            <input type="file" name="video" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('/markers') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
