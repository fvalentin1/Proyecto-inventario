@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>{{ $news->title }}</h1>
    <h4>{{ $news->subtitle }}</h4>
    <img src="{{ $news->image ? 'data:image/png;base64,'.$news->image : 'https://via.placeholder.com/300x200.png?text=Default+Image' }}" class="img-fluid mb-4" alt="News Image">
    <div class="mb-3">
        <p>{{ $news->body }}</p>
    </div>
    <a href="{{ route('news.index') }}" class="btn btn-primary">Back to List</a>
    <a href="{{ route('news.edit', $news) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('news.destroy', $news) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
