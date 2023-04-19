<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sandbox</title>

    @vite('resources/css/app.css')

    @stack('scripts')
</head>
<body class="antialiased">
    <main class="container mx-auto max-w-screen-lg">
        {{ $slot }}
    </main>
</body>
</html>
