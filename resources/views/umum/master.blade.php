<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>CRM Katering</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/genosstyle.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet" />


</head>

<body>

    <nav class="navbar navbarfont navbar-expand-lg navbar-inverse navbar-light  home" style="height: 100px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span id="toggler"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>
        <a class="navbar-brand" href="#">
            <!-- <img src="{{ asset('/assets/gambar/logo2.png') }} " alt="logo" /> -->
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mt-2 mt-sms-0  ">
                <li class="nav-item ">
                    <a id="home" class="nav-link" href="/">Home </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{route('product')}}">Product</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{route('product')}}">Kontak</a>
                </li>

                @if (auth()->check())

                    @if (auth()->user()->hakAkses == 'admin' || auth()->user()->hakAkses == 'pimpinan')
                        <li class="nav-item ">
                        <a class="nav-link" href="{{route('admin')}}">Dashboard</a>
                    </li>
                    @endif

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <span class="badge badge-danger">3</span>  {{auth()->user()->username}}
                        <i class="fa fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a href="{{route('keranjang')}}" class="dropdown-item dropdown-footer">Keranjang <span class="badge badge-danger">4</span></a>
                        <a href="{{route('logout')}}" class="dropdown-item dropdown-footer">History Belanja</a>
                        <hr>
                        <a href="{{route('logout')}}" class="dropdown-item dropdown-footer">Logout</a>
                    </div>
                </li>
                @else
                <li class="nav-item ">
                    <a class="nav-link" href="/login">
                        Login
                        <i class="fa fa-user"></i>
                    </a>
                </li>
                @endif

            </ul>
        </div>
    </nav>

    @yield('content')
    @yield('footer')

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src=" {{asset ('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    @yield('script')

</body>

</html>
