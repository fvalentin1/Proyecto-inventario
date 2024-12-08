@extends('layouts.dashboard')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Room Details</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Rooms</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Show</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    <!-- END Hero -->

    <div class="content">

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
