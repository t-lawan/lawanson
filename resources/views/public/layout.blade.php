<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Thomas' Portfolio</title>

    <!-- Styles -->
    @include('public.partials.styles')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @include('public.partials.nav.site')

    @yield('content')


    @include('public.partials.scripts')




</body>
</html>
