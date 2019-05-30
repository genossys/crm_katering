<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM Katering</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans&display=swap" rel="stylesheet">
    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/genosstyle.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet" />


</head>
<body class="bodypolos">


<nav class="navbar navbarfont navbar-expand-lg navbar-inverse navbar-dark fixed-top home" style="background-color: rgba(0, 0, 0, 0)">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span id="toggler"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>
    <a class="navbar-brand" href="#">
        <!-- <img src="{{ asset('/assets/gambar/logo2.png') }} " alt="logo" /> -->
    </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-sms-0  ">
            <li class="nav-item ">
                <a id="home" class="nav-link" href="/">Home </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('produk')}}">Product</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('produk')}}">Kontak</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="/login"> Login <i class="fa fa-user"></i></a>
            </li>

        </ul>
    </div>
</nav>

<section class="gambarfullhome">

    <div class="bgtekshome">

        <div class="tekshome">
            <h1 class="judulhome anJudul">
                Aplikasi CRM Katering
            </h1>

            <p class="isihome anIsi">
                Pesan Katering Secara Online Tanpa Ribet
            </p>

            <button class="btn btn-outline-warning btn-lg anBtn">Mulai Belanja</button>
        </div>
    </div>
</section>

<!-- JS -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/tampilan/genosstyle.js') }}"></script>
</body>
