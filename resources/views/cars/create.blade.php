@extends('layouts.dashboard')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Añadir un nuevo auto</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Autos</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Añadir</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    <!-- END Hero -->

    <div class="content">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cars.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="brand">Marca</label>
                <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand') }}" placeholder="Enter car brand" required>
            </div>

            <div class="form-group mb-3">
                <label for="model">Modelo</label>
                <input type="text" name="model" id="model" class="form-control" value="{{ old('model') }}" placeholder="Enter car model" required>
            </div>

            <div class="form-group mb-3">
                <label for="year">Año</label>
                <input type="number" name="year" id="year" class="form-control" value="{{ old('year') }}" placeholder="Enter car year" min="1900" max="{{ date('Y') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="price">Precio</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" placeholder="Enter car price" step="0.01" required>
            </div>

            <button type="submit" class="btn btn-primary">Añadir auto</button>
            <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

@endsection


