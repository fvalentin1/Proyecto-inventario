@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Car Details</h1>

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
