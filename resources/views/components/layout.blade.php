<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Adria Motors' }}</title>
        <meta name="description" content="{{ $description ?? 'Svakodnevno koristimo svoje dugogodišnje iskustvo u nabavi, prodaji i održavanju vozila kako bi Vaše iskustvo s nama bilo bezbrižno i puno povjerenja.' }}">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $title ?? 'Adria Motors' }}">
        <meta property="og:description" content="{{ $description ?? 'Svakodnevno koristimo svoje dugogodišnje iskustvo u nabavi, prodaji i održavanju vozila kako bi Vaše iskustvo s nama bilo bezbrižno i puno povjerenja.' }}">
        <meta property="og:image" content="{{ url('/logo.svg') }}">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $title ?? 'Adria Motors' }}">
        <meta name="twitter:description" content="{{ $description ?? 'Svakodnevno koristimo svoje dugogodišnje iskustvo u nabavi, prodaji i održavanju vozila kako bi Vaše iskustvo s nama bilo bezbrižno i puno povjerenja.' }}">
        <meta name="twitter:image" content="{{ url('/logo.svg') }}">

        <link rel="icon" href="/favicon.ico" sizes="48x48">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white text-neutral-900">
        {{ $slot }}
    </body>
</html>
