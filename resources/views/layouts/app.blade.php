<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        @include('inc.asset')
        @stack('css')
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap">
            @include('inc.header')
            @yield('content')
            @include('inc.footer')
        </div>
        @stack('js')
        @stack('js2')
        {!! sweetAlert29() !!}
    </body>
</html>