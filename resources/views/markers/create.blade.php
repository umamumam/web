@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Create New Marker</h4>
            <a href="{{ route('markers.index') }}" class="btn btn-secondary btn-sm">← Back to List</a>
        </div>
        <div class="card-body">
            <form action="{{ route('markers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{--
                <div class="mb-3">
                    <label for="unique_code" class="form-label">Unique Code</label>
                    <input type="text" name="unique_code" id="unique_code" class="form-control" required>
                </div>
                --}}

                <div class="mb-3">
                    <label for="photo" class="form-label">Marker Image</label>
                    <input type="file" name="photo" id="photo" class="form-control" accept="image/*" required>
                </div>

                <div class="mb-3">
                    <label for="video" class="form-label">AR Video</label>
                    <input type="file" name="video" id="video" class="form-control" accept="video/*" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description <small class="text-muted">(optional)</small></label>
                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter a description..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save Marker</button>
            </form>
        </div>
    </div>
</div>
@endsection
