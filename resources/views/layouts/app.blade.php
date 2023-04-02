<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Auction</title>
    </head>
    <body>
        <header>
            <h1><a href="/">Auction</a></h1>
        </header>
        <nav>
            <a href="{{ route('category.index') }}">Categories</a>
        </nav>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>My first auction &copy 2023</p>
        </footer>
    </body>
</html>
