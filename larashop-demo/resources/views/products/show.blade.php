<x-layouts.app>
    <x-slot:title>{{ $product->name }} — LaraShop</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <nav class="mb-8 flex items-center gap-2 text-sm text-zinc-400">
            <a href="{{ route('home') }}" class="hover:text-zinc-600 transition-colors">Home</a>
            <span>/</span>
            <a href="{{ route('products.index') }}" class="hover:text-zinc-600 transition-colors">Products</a>
            <span>/</span>
            <span class="text-zinc-600 truncate max-w-xs">{{ $product->name }}</span>
        </nav>

        {{-- Product detail --}}
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">

            {{-- Product image --}}
            <div class="overflow-hidden rounded-3xl border border-zinc-100 bg-white shadow-sm">
                <img
                    src="{{ $product->image_url }}"
                    alt="{{ $product->name }}"
                    class="h-full w-full object-cover"
                >
            </div>

            {{-- Product info --}}
            <div class="flex flex-col">

                {{-- Category badge --}}
                <div class="mb-4">
                    <a href="{{ route('products.index') }}?category={{ $product->category->slug }}"
                       class="inline-flex items-center gap-1.5 rounded-full bg-violet-50 px-3 py-1 text-sm font-medium text-violet-700 hover:bg-violet-100 transition-colors">
                        {{ $product->category->icon }} {{ $product->category->name }}
                    </a>
                </div>

                {{-- Name --}}
                <h1 class="text-3xl font-bold tracking-tight text-zinc-900 sm:text-4xl">{{ $product->name }}</h1>

                {{-- Rating --}}
                <div class="mt-4 flex items-center gap-2">
                    <div class="flex items-center gap-0.5">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg class="h-4 w-4 {{ $i <= round($product->rating) ? 'text-amber-400' : 'text-zinc-200' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <span class="text-sm font-medium text-zinc-700">{{ number_format($product->rating, 1) }}</span>
                    <span class="text-sm text-zinc-400">({{ number_format($product->reviews_count) }} reviews)</span>
                </div>

                {{-- Price --}}
                <div class="mt-6">
                    <span class="text-4xl font-bold text-zinc-900">${{ number_format($product->price, 2) }}</span>
                </div>

                {{-- Description --}}
                <div class="mt-6 border-t border-zinc-100 pt-6">
                    <p class="text-base leading-relaxed text-zinc-600">{{ $product->description }}</p>
                </div>

                {{-- Actions --}}
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    {{-- Add to cart placeholder (ready to wire up) --}}
                    <button class="flex flex-1 items-center justify-center gap-2 rounded-xl bg-violet-600 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition-all hover:bg-violet-700 hover:shadow-md">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        Add to Cart
                    </button>

                    {{-- Bookmark placeholder --}}
                    <button class="flex items-center justify-center gap-2 rounded-xl border border-zinc-200 bg-white px-5 py-3.5 text-sm font-medium text-zinc-700 shadow-sm transition-all hover:border-rose-200 hover:bg-rose-50 hover:text-rose-600">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        Save
                    </button>
                </div>

                {{-- Meta --}}
                <div class="mt-8 rounded-2xl border border-zinc-100 bg-zinc-50 p-4">
                    <dl class="grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <dt class="text-zinc-400">Category</dt>
                            <dd class="mt-0.5 font-medium text-zinc-900">{{ $product->category->name }}</dd>
                        </div>
                        <div>
                            <dt class="text-zinc-400">Rating</dt>
                            <dd class="mt-0.5 font-medium text-zinc-900">{{ number_format($product->rating, 1) }} / 5.0</dd>
                        </div>
                        <div>
                            <dt class="text-zinc-400">Reviews</dt>
                            <dd class="mt-0.5 font-medium text-zinc-900">{{ number_format($product->reviews_count) }}</dd>
                        </div>
                        <div>
                            <dt class="text-zinc-400">Availability</dt>
                            <dd class="mt-0.5 font-medium text-emerald-600">In Stock</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Related Products --}}
        @if ($relatedProducts->isNotEmpty())
            <section class="mt-20">
                <div class="mb-8 flex items-center justify-between">
                    <h2 class="text-2xl font-bold tracking-tight text-zinc-900">More from {{ $product->category->name }}</h2>
                    <a href="{{ route('products.index') }}?category={{ $product->category->slug }}"
                       class="text-sm font-medium text-violet-600 hover:text-violet-700 transition-colors">
                        View all →
                    </a>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($relatedProducts as $related)
                        <x-product-card :product="$related" />
                    @endforeach
                </div>
            </section>
        @endif

    </div>
</x-layouts.app>
