@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.navbar')
            @include('layouts.welcomeViews.home')
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

        }); //fin document 
    </script>
@endsection
