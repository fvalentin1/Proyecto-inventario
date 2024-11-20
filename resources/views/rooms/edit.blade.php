@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Room</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Room Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $room->name) }}" placeholder="Enter room name" required>
        </div>

        <div class="form-group mb-3">
            <label for="capacity">Capacity</label>
            <input type="number" name="capacity" id="capacity" class="form-control" value="{{ old('capacity', $room->capacity) }}" placeholder="Enter room capacity" min="1" required>
        </div>

        <div class="form-group mb-3">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $room->location) }}" placeholder="Enter room location" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Room</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
