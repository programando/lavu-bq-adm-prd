<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @if ( Route::currentRouteName()=='home')
          {{ $app_name }} | {{ $app_descripcion}}
          @else
             {{ $app_title }} | {{ $app_name }}
        @endif
     </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }} " >

</head>
<body>
    <div class="vue_app">

        <div class="container-fluid">
            @include('templates.navbar')
            @yield('content')
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
