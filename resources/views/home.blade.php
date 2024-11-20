@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesión correctamente!') }}
                </div>

                <div class="card-body">
                    <a href="{{ route('cars.index') }}" class="btn btn-primary">Ir a la lista de coches</a>
                    <a href="{{ route('rooms.index') }}" class="btn btn-primary">Ir a la lista de salones</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
