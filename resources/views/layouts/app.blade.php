<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fonts
    </head>
    <body class="font-sans antialiased">
        {{ $slot }}

        @livewireScriptConfig
    </body>
</html>
