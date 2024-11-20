@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Room Details</h1>

    <div class="card">
        <div class="card-header">
            <h3>{{ $room->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Capacity:</strong> {{ $room->capacity }}</p>
            <p><strong>Location:</strong> {{ $room->location }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Back to Rooms</a>
            <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Edit Room</a>
            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this room?')">Delete Room</button>
            </form>
        </div>
    </div>
</div>
@endsection
