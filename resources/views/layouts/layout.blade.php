<!DOCTYPE html>
<!-- This is a Blade template for a basic HTML layout. It includes the necessary meta tags and a title. -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <body>
        @include('layouts.partials.header')

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; 2023 My Website</p>
        </footer>
    </body>
</html>