@extends('layouts.dashboard')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Detalles del auto</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Autos</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Ver</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    <!-- END Hero -->

    <div class="content">

        <div class="card mt-4">
            <div class="card-header">
                <h4>{{ $car->brand }} - {{ $car->model }}</h4>
            </div>
            <div class="card-body">
                <p><strong>Brand:</strong> {{ $car->brand }}</p>
                <p><strong>Model:</strong> {{ $car->model }}</p>
                <p><strong>Year:</strong> {{ $car->year }}</p>
                <p><strong>Price:</strong> ${{ number_format($car->price, 2) }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('cars.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this car?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
