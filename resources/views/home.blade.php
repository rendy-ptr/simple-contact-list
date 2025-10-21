<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="soft-bg min-h-screen py-20 text-(--soft-ink)">
        <div class="mx-auto grid max-w-7xl gap-12 px-6 font-sans md:grid-cols-2 lg:grid-cols-[1.3fr,1fr] items-start">
            @livewire('forms')
            @livewire('users')
        </div>
    </div>
</body>

</html>
