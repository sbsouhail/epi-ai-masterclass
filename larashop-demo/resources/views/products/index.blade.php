<x-layouts.app>
    <x-slot:title>Products — LaraShop</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

        {{-- Page header --}}
        <div class="mb-10">
            <nav class="mb-4 flex items-center gap-2 text-sm text-zinc-400">
                <a href="{{ route('home') }}" class="hover:text-zinc-600 transition-colors">Home</a>
                <span>/</span>
                <span class="text-zinc-600">Products</span>
            </nav>
            <h1 class="text-3xl font-bold tracking-tight text-zinc-900">All Products</h1>
            <p class="mt-2 text-zinc-500">Browse our full catalog of tech products</p>
        </div>

        {{-- Livewire ProductGrid component --}}
        <livewire:product-grid />
    </div>
</x-layouts.app>
