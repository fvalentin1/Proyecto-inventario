@extends('layouts.dashboard')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit News: {{ $news->title }}</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">News</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    <!-- END Hero -->

    <div class="content pb-3">

        <form action="{{ route('news.update', $news) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="subtitle">Subtitle</label>
                <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ $news->subtitle }}">
            </div>
            <div class="form-group mb-3">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control" rows="5" required>{{ $news->body }}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="image">Image (optional)</label>
                <input type="file" name="image" id="image" class="form-control">
                <!-- Mostrar la imagen en un cuadrado de 200x200px -->
                <br>
                <p>Imagen actual:</p>
                <div style="width: 200px; height: 200px; overflow: hidden;">
                    <img src="{{ $news->image ? 'data:image/png;base64,'.$news->image : 'https://via.placeholder.com/300x200.png?text=Default+Image' }}" alt="News Image" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" name="remove_image" id="remove_image" class="form-check-input">
                <label for="remove_image" class="form-check-label">Remove current image</label>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
