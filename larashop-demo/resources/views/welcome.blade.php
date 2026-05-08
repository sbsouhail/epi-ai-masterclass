<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-zinc-50 antialiased">
    <div class="flex min-h-screen flex-col items-center justify-center px-4">
        <div class="text-center">
            <h1 class="text-2xl font-semibold tracking-tight text-zinc-900">
                {{ config('app.name') }}
            </h1>
            <p class="mt-2 text-sm text-zinc-600">
                Laravel, Vite, and Tailwind CSS.
            </p>
        </div>
    </div>
</body>
</html>
