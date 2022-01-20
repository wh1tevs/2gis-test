<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body>
        <header class="w-full h-16 flex items-center bg-slate-200 border border-slate-300">
            <a class="my-4 ml-5 text-3xl font-bold" href="/">Universities</a>
        </header>
        {{ $slot }}
        <footer class="mt-8 w-full h-24 flex justify-center items-center">
            <span class="font-thin text-sm">&copy; <a href="https://github.com/wh1tevs">wh1tevs</a></span>
        </footer>
    </body>
</html>
