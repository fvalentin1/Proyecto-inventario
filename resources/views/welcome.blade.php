@extends('layouts.exterior')

@section('content')
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('assets/media/photos/photo15@2x.jpg');">
        <div class="bg-primary-dark-op">
          <div class="content content-full">
            <div class="py-3 text-center">
              <h1 class="text-white mb-2">Sistema de inventario</h1>
              <h2 class="h4 fw-normal text-white-75 mb-0">Con DashMix</h2>
            </div>
          </div>
        </div>
    </div>
    <!-- END Hero -->

    <div class="content mb-5">
        <div class="jumbotron text-center animate__animated animate__fadeIn">
            <h1 class="display-4">Bienvenido a Nuestra Aplicación</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            <hr class="my-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aprende más</a>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 animate__animated animate__fadeInLeft">
                <h2>Nuestros Servicios</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <a class="btn btn-secondary" href="#" role="button">Ver detalles &raquo;</a>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <h2>Sobre Nosotros</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <a class="btn btn-secondary" href="#" role="button">Ver detalles &raquo;</a>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInRight">
                <h2>Contacto</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <a class="btn btn-secondary" href="#" role="button">Ver detalles &raquo;</a>
            </div>
        </div>
    </div>
@endsection
