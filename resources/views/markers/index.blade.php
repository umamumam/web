@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Markers</h4>
            <a href="{{ route('markers.create') }}" class="btn btn-primary">+ Create New Marker</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Unique Code</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($markers as $marker)
                        <tr>
                            <td>{{ $marker->id }}</td>
                            <td>{{ $marker->unique_code }}</td>
                            <td>
                                @if($marker->photo_path)
                                    <img src="{{ asset('storage/' . $marker->photo_path) }}" alt="Marker Image" class="img-thumbnail" style="max-width: 100px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $marker->description ?? '-' }}</td>
                            <td>
                                <a href="{{ route('markers.scan', $marker->unique_code) }}" class="btn btn-success btn-sm mb-1">Scan</a>
                                <form action="{{ route('markers.destroy', $marker->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-muted">No markers found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
