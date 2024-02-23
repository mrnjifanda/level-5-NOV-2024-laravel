<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
    </head>
    <body>
        <header>
            <h1>Header</h1>
            <ul>
                <li><a href="/">Welcom</a></li>
                <li><a href="/contact-us">Contact-us</a></li>
            </ul>
            <hr>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <hr>
            <h1>Footer</h1>
        </footer>
    </body>
</html>
