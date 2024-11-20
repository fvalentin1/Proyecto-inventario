@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Car</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand', $car->brand) }}" placeholder="Enter car brand" required>
        </div>

        <div class="form-group mb-3">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" class="form-control" value="{{ old('model', $car->model) }}" placeholder="Enter car model" required>
        </div>

        <div class="form-group mb-3">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $car->year) }}" placeholder="Enter car year" min="1900" max="{{ date('Y') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $car->price) }}" placeholder="Enter car price" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Car</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
