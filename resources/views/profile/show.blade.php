@extends('layouts.dashboard')

@section('title', '- Perfil de usuario')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Mi perfil</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Usuario</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Perfil</li>
            </ol>
            </nav>
        </div>
        </div>
    </div>
    <!-- END Hero -->

    <div class="content">

        {{-- @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif --}}

        <div class="mb-3">
            <strong>Nombre:</strong>
            <p>{{ $user->name }}</p>
        </div>

        <div class="mb-3">
            <strong>Email:</strong>
            <p>{{ $user->email }}</p>
        </div>

        <div class="mb-3">
            <strong>Role:</strong>
            <br>
            @foreach($user->getRoleNames() as $role)
                @if($role == 'admin')
                    <span class="badge bg-warning">{{ $role }}</span>
                @elseif($role == 'usuario')
                    <span class="badge bg-success">{{ $role }}</span>
                @else
                    <span class="badge bg-info">{{ $role }}</span>
                @endif
            @endforeach
        </div>

        <a href="{{ route('profile.edit') }}" class="btn btn-primary mb-3">Editar mi perfil</a>
    </div>
@endsection

@push('js')
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: '{{ session('success') }}',
                });
            });
        </script>
    @endif
@endpush
