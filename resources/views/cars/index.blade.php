@extends('layouts.dashboard')

@section('title', '- Cars')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Cars</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Cars</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    <!-- END Hero -->

    <div class="content">

        <a href="{{ route('cars.create') }}" class="btn btn-success">Add Car</a>

        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->price }}</td>
                        <td>
                            <a href="{{ route('cars.show', $car) }}" class="btn btn-info">View</a>
                            <a href="{{ route('cars.edit', $car) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('cars.destroy', $car) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('js')
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                });
            });
        </script>
    @endif
@endpush
