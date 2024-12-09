@extends('layouts.dashboard')

@section('title', '- Rooms')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Rooms</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Rooms</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    <!-- END Hero -->


    <div class="content">
        <a href="{{ route('rooms.create') }}" class="btn btn-success mb-3">Add Room</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Capacity</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->capacity }}</td>
                            <td>{{ $room->location }}</td>
                            <td>
                                <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
