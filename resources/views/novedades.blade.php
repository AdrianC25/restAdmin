@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.navbar')
            @include('layouts.welcomeViews.news')
        </div>
    </div>
@endsection

@section('css')
    @parent
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            padding-top: 1rem;
        }

        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: #fff;
        }

        .sidebar .nav-item {
            padding: 0.5rem 1rem;
        }

        .sidebar .nav-item.active {
            background-color: #495057;
        }
    </style>
@endsection

@section('javascript')
@parent
<script>
    // coneccion con ajax 
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log('Ready to Work');
        // crear producto 
        $('#btn_guardar_noticia').on('click', function(event) {
            event.preventDefault();

            var titulo = $('#tituloNoticiaInput').val();
            var detalle = $('#detalleNoticiaInput').val();


            var argumento = {
                titulo: titulo,
                detalle: detalle
            };

            console.log('Variables Obtenidas: ', argumento);

            $.ajax({
                    url: '{{ url('/novedades/add_noticia') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: argumento
                })
                .done(function(respuesta) {
                    console.log('Noticia Guardada');
                    console.log(respuesta);
                    $('#agregarNoticia').modal('hide');
                    location.reload();
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    console.log('Error: ', errorThrown);
                    alert('Ha ocurrido un error al intentar guardar. Intenta Nuevamente.');
                });
        });
    }); //fin funcion
</script>
@endsection