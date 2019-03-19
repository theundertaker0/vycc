@extends('templates.templatefront')
@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset("css/gallery-grid.css")}}">
@endsection

@section('body')
<!-- Inicia Carrousel -->
<div id="carouselIndicators" class="carousel slide margenInferior" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset("img/fachada frontal.jpg")}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset("img/fachada trasera.jpg")}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset("img/terraza.jpg")}}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
<!--Termina Carrousel -->

<!-- Inicia Galería -->

<div class="container gallery-container margenInferior">

    <h1 class="text-center">Galería de Imágenes</h1>

    <p class="page-description text-center">Diferentes detalles de la arquitectura</p>

    <div class="tz-gallery">

        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="{{asset("img/comedor.jpg")}}">
                        <img src="{{asset("img/comedor.jpg")}}" alt="Comedor" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="{{asset("img/fachada frontal.jpg")}}">
                        <img src="{{asset("img/fachada frontal.jpg")}}" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="{{asset("img/fachada lateral.jpg")}}">
                        <img src="{{asset("img/fachada lateral.jpg")}}" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="{{asset("img/fachada lateral 2.jpg")}}">
                        <img src="{{asset("img/fachada lateral 2.jpg")}}" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="{{asset("img/fachada perspectiva.jpg")}}">
                        <img src="{{asset("img/fachada perspectiva.jpg")}}" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="{{asset("img/fachada trasera.jpg")}}">
                        <img src="{{asset("img/fachada trasera.jpg")}}" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>

</div>
<!-- Termina Galería -->

<!-- Inicia Contacto -->
<div class="row">
    @include('vendor.contact.index')
</div>

<!-- Termina Contacto -->
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        $(document).ready(function(){
            baguetteBox.run('.tz-gallery');
        });
    </script>
@endsection