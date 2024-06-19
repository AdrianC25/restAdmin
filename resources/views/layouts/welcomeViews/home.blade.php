<!-- Contenido Principal del Dashboard -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-capitalize">Nuestras Ofertas</h1>
    </div>
        
    <div class="row">
        @foreach ($noticias as $noticia)
        <!-- Sección de Noticias -->
        <div class="col-md-4 mb-4">
            <div class="card mb-auto h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $noticia->titulo }}</h5>
                    <p class="card-text">{{ $noticia->detalle }}</p>
                    <a href="#" class="btn btn-success">Realizar Reserva</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>