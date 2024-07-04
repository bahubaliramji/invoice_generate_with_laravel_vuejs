<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meata charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel VueJs</title>
        <!-- vite css -->
        @vite(['resources/css/app.css'])
    </head>
    <body>
        <div id="app">
        </div>
            <!-- vite js -->
        @vite(['resources/js/app.js'])
    </body>
</html>
