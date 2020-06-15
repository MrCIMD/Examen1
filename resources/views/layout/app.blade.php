<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tiendita de La esquina</title>
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"  />
        <!-- inject css start -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <!--== bulma css -->
        <link href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.css" rel="stylesheet" type="text/css" />
        <!-- Place your kit's code here -->
        <script src="https://kit.fontawesome.com/910b599d36.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="page-wrapper">

            @include('layout.header')

            @yield('content')

            @include('layout.footer')

        </div>

        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>