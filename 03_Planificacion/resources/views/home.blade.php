@extends('tablar::page')

@section('content')
<!-- En tu archivo de layout principal (por ejemplo, app.blade.php) -->
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

<!-- Image and Text Section -->
<div class="container-fluid" style="padding: 0;">
    <div class="row">
        <div class="col-12">
            <div class="position-relative">
                <img src="{{ asset('assets/img/home.jpg') }}" alt="Home Image" class="img-fluid w-100">
                <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                    <h1 class="home-title">Bienvenidos a Nexuss</h1>
                    <p class="home-subtitle">Gestiona tus proyectos de manera eficiente</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
@include('layouts.footer')
@endsection

