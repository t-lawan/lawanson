<!DOCTYPE html>
<html>
<head>
  <title>Thomas' Portfolio</title>
  @include('public.partials.styles')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @include('public.partials.nav.site')

    @yield('content')


    @include('public.partials.scripts')

    @include('public.partials.footer')


</body>
</html>
