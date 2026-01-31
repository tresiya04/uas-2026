<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Flat - Bootstrap 5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset ('assets1/css/bootstrap-5.0.0-alpha-2.min.css')}}" />
    <link rel="stylesheet" href="{{ asset ('assets1/css/LineIcons.2.0.css')}}"/>
    <link rel="stylesheet" href="{{ asset ('assets1/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{ asset ('assets1/css/lindy-uikit.css')}}"/>
  </head>
<body>
    
    @include('partials.preloader')
    @include('partials.hero')
    @include('partials.feature')
    @include('partials.pricing')
    @yield('content')    
    @include('partials.team')
    @include('partials.contact')
    @include('partials.clients')
    @include('partials.footer')
    @include('partials.scroll')
    @include('partials.script')

</body>
</html>