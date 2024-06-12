@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.navbar')
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

