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
        
        }); //fin document 
    </script>
@endsection

