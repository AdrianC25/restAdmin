 <!-- Contenido Principal del Dashboard -->
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-capitalize">Nuestras novedades</h1>
        <i class="fas fa-plus btn add-noticia" data-bs-toggle="modal"
        data-bs-target="#agregarNoticia" style="color: green;"> Agregar</i>
    </div>
        
    <div class="row">
        @foreach ($noticias as $noticia)
        <!-- Sección de Noticias -->
        <div class="col-md-4 mb-4">
            <div class="card mb-4 h-100 justify-content-center align-items-center">
                {{-- <img src="{{ asset('images/imagen1.jpg') }}" class="card-img-top" alt="Noticia 1"> --}}
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


<!-- Modals Section -->
    <!-- Modal add Noticia-->
    <div class="modal fade" id="agregarNoticia" tabindex="-1" aria-labelledby="agregarNoticiaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="agregarNoticiaLabel">Agergar Noticia del Restaurant</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tituloNoticiaInput"><b>Titulo de Notica</b></label>
                        <input type="text" class=" form-control" id="tituloNoticiaInput" placeholder="Agregar Texto" required>
                        <label for="detalleNoticiaInput"><b>Detalle de Notica</b></label>
                        <textarea id="detalleNoticiaInput" class="form-control" rows="4" cols="62" placeholder="Agregar texto" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="btn_guardar_noticia" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>
