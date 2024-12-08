@extends('layouts.dashboard')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Room: {{ $room->name }}</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Rooms</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    <!-- END Hero -->

    <div class="content">
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
