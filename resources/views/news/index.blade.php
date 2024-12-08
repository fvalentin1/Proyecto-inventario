@extends('layouts.dashboard')

@section('title', '- News')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">News</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">News</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    <!-- END Hero -->

    <div class="content">
        <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Create News</a>
        <div class="row">
            @foreach ($news as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $item->image ? 'data:image/png;base64,'.$item->image : 'images/default.jpg' }}" alt="News Image">
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
