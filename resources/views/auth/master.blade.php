<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>Katering Bu Tino</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/font-awesome/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{ asset('/adminlte/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/genosstyle.css')}}">
    <link rel="stylesheet" href=" {{ asset('/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    @yield('css')
</head>
<body>
        <main class="py-4">
            @yield('content')
        </main>

    @yield('script')
</body>
</html>
