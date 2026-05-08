<x-layouts.app>
    <x-slot:title>LaraShop — The Future of Tech Shopping</x-slot:title>

    {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-violet-600 via-violet-700 to-indigo-800 text-white">

        {{-- Decorative grid overlay --}}
        <div class="absolute inset-0 opacity-10"
             style="background-image: linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px); background-size: 40px 40px;">
        </div>

        {{-- Decorative blobs --}}
        <div class="absolute -right-20 -top-20 h-80 w-80 rounded-full bg-violet-400 opacity-20 blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 h-80 w-80 rounded-full bg-indigo-400 opacity-20 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="max-w-3xl">

                {{-- Badge --}}
                <div class="mb-6 inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-sm text-white/80 backdrop-blur-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                    AI-Powered Shopping Experience — EPI Masterclass Demo
                </div>

                {{-- Headline --}}
                <h1 class="mb-6 text-4xl font-bold tracking-tight leading-tight sm:text-5xl lg:text-6xl">
                    The future of<br>
                    <span class="text-violet-200">tech shopping</span>
                </h1>

                <p class="mb-10 max-w-xl text-lg leading-relaxed text-violet-100">
                    Discover the latest laptops, phones, audio gear, and smart devices.
                    Built with Laravel, Livewire, and Tailwind CSS.
                </p>

                {{-- CTA --}}
                <div class="flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('products.index') }}"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-violet-700 shadow-lg transition-all hover:bg-violet-50 hover:shadow-xl">
                        Browse Products
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>

                    {{-- AI search placeholder --}}
                    <div class="flex flex-1 items-center gap-2 rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-sm text-white/60 backdrop-blur-sm cursor-pointer hover:bg-white/15 transition-colors">
                        <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <span>AI search coming soon...</span>
                        <span class="ml-auto rounded border border-white/20 px-1.5 py-0.5 text-xs">✨ AI</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats bar --}}
    <div class="border-b border-zinc-200 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 divide-x divide-zinc-100">
                <div class="py-6 text-center">
                    <div class="text-2xl font-bold text-zinc-900">{{ \App\Models\Product::count() }}+</div>
                    <div class="mt-1 text-xs text-zinc-500">Products</div>
                </div>
                <div class="py-6 text-center">
                    <div class="text-2xl font-bold text-zinc-900">{{ \App\Models\Category::count() }}</div>
                    <div class="mt-1 text-xs text-zinc-500">Categories</div>
                </div>
                <div class="py-6 text-center">
                    <div class="text-2xl font-bold text-zinc-900">4.7★</div>
                    <div class="mt-1 text-xs text-zinc-500">Avg Rating</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Categories Section --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">

        <div class="mb-8 flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold tracking-tight text-zinc-900">Shop by Category</h2>
                <p class="mt-1 text-sm text-zinc-500">Browse our curated selection of tech categories</p>
            </div>
            <a href="{{ route('products.index') }}" class="text-sm font-medium text-violet-600 hover:text-violet-700 transition-colors">
                All products →
            </a>
        </div>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">
            @foreach ($categories as $category)
                <a href="{{ route('products.index') }}?category={{ $category->slug }}"
                   class="group flex flex-col items-center gap-3 rounded-2xl border border-zinc-100 bg-white p-5 text-center shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:border-violet-200 hover:shadow-md">
                    <span class="text-3xl">{{ $category->icon }}</span>
                    <div>
                        <div class="text-sm font-semibold text-zinc-900 group-hover:text-violet-600 transition-colors">{{ $category->name }}</div>
                        <div class="mt-0.5 text-xs text-zinc-400">{{ $category->products_count }} items</div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    {{-- Featured Products Section --}}
    <section class="border-t border-zinc-100 bg-zinc-50 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mb-8 flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight text-zinc-900">Featured Products</h2>
                    <p class="mt-1 text-sm text-zinc-500">Hand-picked products our customers love</p>
                </div>
                <a href="{{ route('products.index') }}" class="text-sm font-medium text-violet-600 hover:text-violet-700 transition-colors">
                    View all →
                </a>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($featuredProducts as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Banner --}}
    <section class="bg-white py-16">
        <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-gradient-to-br from-violet-600 to-indigo-700 px-8 py-16 text-white shadow-2xl">
                <h2 class="mb-4 text-3xl font-bold tracking-tight">Ready to explore?</h2>
                <p class="mb-8 text-violet-100">Discover {{ \App\Models\Product::count() }} products across {{ \App\Models\Category::count() }} categories — all in one place.</p>
                <a href="{{ route('products.index') }}"
                   class="inline-flex items-center gap-2 rounded-xl bg-white px-8 py-3 text-sm font-semibold text-violet-700 shadow transition-all hover:bg-violet-50 hover:shadow-lg">
                    Browse All Products
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
