<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title')</title>
        @vite('resources/js/app.js')
        @vite('resources/scss/app.scss')
    </head>
    <body>

        @include('partials.main-header')

        <main>
            <div class="container">
                @yield('main-content')
            </div>
        </main>

        @include('partials.main-footer')

    </body>
</html>