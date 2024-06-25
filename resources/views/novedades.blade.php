@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.navbar')
            @include('layouts.novedadesViews.news')
        </div>
    </div>
@endsection

@section('css')
    @parent
    <style>
        body {
            font-size: 0.9rem;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .sidebar {
            height: calc(100vh - 56px);
            padding: 0;
            position: fixed;
            top: 56px;
            /* Ajusta la posición para que quede debajo del navbar */
            left: 0;
            overflow-y: auto;
            z-index: 100;
            background-color: #343a40;
        }

        .sidebar .nav-link {
            color: #ffffff;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 250px;
            padding: 15px;
            margin-top: 56px;
            /* Ajusta el margen superior para evitar que quede debajo del navbar */
        }

        @media (max-width: 767.98px) {
            .sidebar {
                position: relative;
                height: auto;
                top: 0;
            }

            .content {
                margin-left: 0;
            }
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
            // Crear producto
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
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "Tu noticia ha sido guardada",
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            location.reload();
                        });
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        console.log('Error: ', errorThrown);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al guardar',
                            text: 'Ha ocurrido un error al intentar guardar. Intenta Nuevamente.'
                        });
                    });
            });

            // Modulo editar noticia  
            $('.edit-noticia').on('click', function(event) {
                event.preventDefault();
                var idNoticia = $(this).data('id');
                console.log('editar Noticia id ' + idNoticia);
                $.ajax({
                        url: '/novedades/editar_noticia/' + idNoticia,
                        type: 'GET',
                        dataType: 'json',
                    })
                    .done(function(respuesta) {
                        console.log(respuesta);
                        $('#editarNoticia').modal('show');
                        $('#btn_editar_noticia').data('id', idNoticia);
                        $('#tituloNoticiaEditarInput').val(respuesta.noticia.titulo);
                        $('#detalleNoticiaEditarInput').val(respuesta.noticia.detalle);
                    });

            });

            $('#btn_editar_noticia').on('click', function(event) {
                event.preventDefault();
                var idNoticia = $(this).data('id');
                var titulo = $('#tituloNoticiaEditarInput').val();
                var detalle = $('#detalleNoticiaEditarInput').val();

                var argumentos = {
                    id: idNoticia,
                    titulo: titulo,
                    detalle: detalle,
                }

                console.log('Variables Obtenidas: ', argumentos);

                $.ajax({
                        url: '{{ url('/novedades/add_edit_noticia/') }}',
                        type: 'POST',
                        dataType: 'json',
                        data: argumentos,
                    })
                    .done(function(respuesta) {
                        console.log('Noticia Editada Correctamente');
                        console.log(respuesta);
                        $('#editarNoticia').modal('hide');
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "Tu noticia ha sido editada",
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            location.reload();
                        });
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        console.log('Error: ', errorThrown);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al guardar',
                            text: 'Ha ocurrido un error al intentar guardar. Intenta Nuevamente.'
                        });
                    });
            }); //fin funcion

            // modulo eliminar
            $('.delete-noticia').on('click', function(event) {
                event.preventDefault();

                var idNoticia = $(this).data('id');
                console.log('id noticia: ' + idNoticia);

                Swal.fire({
                    title: "¿Estas Seguro de Eliminar esta Noticia?",
                    text: "¡Esto no se podrá revertir!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, Eliminar!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                                url: '/novedades/eliminar/' + idNoticia,
                                type: 'DELETE',
                                dataType: 'json',
                            })
                            .done(function(respuesta) {
                                Swal.fire({
                                    title: "¡Noticia Eliminada!",
                                    text: "Tu noticia ha sido eliminada.",
                                    icon: "success"
                                }).then(() => {
                                    window.location.href = '/novedades';
                                });
                            })
                            .fail(function(jqXHR, textStatus, errorThrown) {
                                console.log('Error: ', errorThrown);
                                Swal.fire({
                                    title: "Error",
                                    text: "Ha ocurrido un error al intentar ELIMINAR. Intenta Nuevamente.",
                                    icon: "error"
                                });
                            });
                    }
                });
            }); // fin funcion

        }); //fin document 
    </script>
@endsection
