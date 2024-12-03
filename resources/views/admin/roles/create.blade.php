@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Rol</h1>
    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nombre del Rol</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Crear Rol</button>
    </form>
</div>
@endsection
