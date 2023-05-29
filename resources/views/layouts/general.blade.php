<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title', 'DC Comics')</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="d-flex flex-column layoutContainer">
        @include('partials.header')
            @yield('content')
        @include('partials.footer')
    </div>
</body>

</html>
