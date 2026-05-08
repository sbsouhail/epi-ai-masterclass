<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'LaraShop') }}</title>
    <meta name="description" content="{{ $description ?? 'Discover the latest tech products — laptops, phones, audio, and more.' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-zinc-50 antialiased">

    {{-- Navbar --}}
    <nav class="sticky top-0 z-50 border-b border-zinc-200 bg-white/80 backdrop-blur-xl">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between gap-8">

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-violet-600 text-white text-sm font-bold">L</div>
                    <span class="text-lg font-semibold tracking-tight text-zinc-900">LaraShop</span>
                </a>

                {{-- Nav links --}}
                <div class="hidden md:flex items-center gap-1">
                    <a href="{{ route('home') }}"
                       class="rounded-lg px-3 py-2 text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'bg-zinc-100 text-zinc-900' : 'text-zinc-600 hover:bg-zinc-50 hover:text-zinc-900' }}">
                        Home
                    </a>
                    <a href="{{ route('products.index') }}"
                       class="rounded-lg px-3 py-2 text-sm font-medium transition-colors {{ request()->routeIs('products.*') ? 'bg-zinc-100 text-zinc-900' : 'text-zinc-600 hover:bg-zinc-50 hover:text-zinc-900' }}">
                        Products
                    </a>
                </div>

                {{-- Right side: search + dark mode toggle placeholder --}}
                <div class="flex items-center gap-3">
                    {{-- Search placeholder (ready for AI search) --}}
                    <a href="{{ route('products.index') }}"
                       class="hidden sm:flex items-center gap-2 rounded-lg border border-zinc-200 bg-zinc-50 px-3 py-2 text-sm text-zinc-400 transition-colors hover:border-zinc-300 hover:bg-white">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <span>Search products...</span>
                        <kbd class="hidden rounded border border-zinc-200 bg-white px-1.5 text-xs text-zinc-400 lg:inline">⌘K</kbd>
                    </a>

                    {{-- Dark mode toggle (placeholder — ready to wire up) --}}
                    <button class="flex h-9 w-9 items-center justify-center rounded-lg border border-zinc-200 bg-zinc-50 text-zinc-500 transition-colors hover:bg-zinc-100 hover:text-zinc-900" title="Toggle dark mode">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="mt-24 border-t border-zinc-200 bg-white">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                <div class="flex items-center gap-2">
                    <div class="flex h-6 w-6 items-center justify-center rounded bg-violet-600 text-white text-xs font-bold">L</div>
                    <span class="text-sm font-medium text-zinc-900">LaraShop</span>
                </div>
                <p class="text-xs text-zinc-400">Built with Laravel + Livewire + Tailwind CSS · EPI AI Masterclass Demo</p>
                <div class="flex items-center gap-4 text-xs text-zinc-400">
                    <a href="{{ route('home') }}" class="hover:text-zinc-600">Home</a>
                    <a href="{{ route('products.index') }}" class="hover:text-zinc-600">Products</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
