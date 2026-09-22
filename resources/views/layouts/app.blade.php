<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        <meta name="description" content="Sekolah Qosim Al Hadi Semarang - Bhakti Kepada Negeri. Pendidikan berkualitas dengan kurikulum modern dan lingkungan belajar yang inspiratif.">

        <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
        <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('images/logo-qosimalhadi-128.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $title ?? 'Qosim Al Hadi Semarang | Bhakti Kepada Negeri' }}">
        <meta property="og:image" content="{{ asset('images/logo-qosimalhadi-512.png') }}">

        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fonts
    </head>
    <body class="font-sans antialiased">
        {{ $slot }}

        @livewireScriptConfig
    </body>
</html>
