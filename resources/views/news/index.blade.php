@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>News List</h1>
    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Create News</a>
    <div class="row">
        @foreach ($news as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $item->image ? 'data:image/png;base64,'.$item->image : 'https://via.placeholder.com/300x200.png?text=Default+Image' }}" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->subtitle }}</p>
                        <a href="{{ route('news.show', $item) }}" class="btn btn-info">View</a>
                        <a href="{{ route('news.edit', $item) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('news.destroy', $item) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
