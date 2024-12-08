@extends('layouts.dashboard')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">News Details</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">News</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Show</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    <!-- END Hero -->

    <div class="content">
        <div class="card">
            <div class="card-header">
                <h1>{{ $news->title }}</h1>
                <h4>{{ $news->subtitle }}</h4>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <img src="{{ $news->image ? 'data:image/png;base64,'.$news->image : 'https://via.placeholder.com/300x200.png?text=Default+Image' }}" class="img-fluid" alt="News Image" style="max-width: 100%; height: auto;">
                </div>
                <div class="mb-3">
                    <p>{{ $news->body }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('news.index') }}" class="btn btn-primary">Back to List</a>
                    <div>
                        <a href="{{ route('news.edit', $news) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('news.destroy', $news) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
