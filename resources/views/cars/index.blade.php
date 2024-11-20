@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Car List</h1>
    <a href="{{ route('cars.create') }}" class="btn btn-primary">Add Car</a>
    <table class="table mt-4">
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
@endsection
