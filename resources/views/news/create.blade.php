@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Create News</h1>
    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image (optional)</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
