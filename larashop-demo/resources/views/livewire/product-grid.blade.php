<div>

    {{-- Filter / Search toolbar --}}
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        {{-- Search input --}}
        <div class="relative flex-1 max-w-sm">
            <svg class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input
                wire:model.live.debounce.300ms="search"
                type="text"
                placeholder="Search products..."
                class="w-full rounded-xl border border-zinc-200 bg-white py-2.5 pl-10 pr-4 text-sm text-zinc-900 shadow-sm placeholder:text-zinc-400 focus:border-violet-400 focus:outline-none focus:ring-2 focus:ring-violet-100 transition-colors"
            >
            @if ($search)
                <button wire:click="$set('search', '')" class="absolute right-3 top-1/2 -translate-y-1/2 text-zinc-400 hover:text-zinc-600">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            @endif
        </div>

        {{-- Right side controls --}}
        <div class="flex items-center gap-3">

            {{-- Category filter --}}
            <select wire:model.live="categorySlug"
                    class="rounded-xl border border-zinc-200 bg-white py-2.5 pl-3 pr-8 text-sm text-zinc-700 shadow-sm focus:border-violet-400 focus:outline-none focus:ring-2 focus:ring-violet-100 transition-colors">
                <option value="">All categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->slug }}">{{ $category->icon }} {{ $category->name }} ({{ $category->products_count }})</option>
                @endforeach
            </select>

            {{-- Sort --}}
            <select wire:model.live="sortBy"
                    class="rounded-xl border border-zinc-200 bg-white py-2.5 pl-3 pr-8 text-sm text-zinc-700 shadow-sm focus:border-violet-400 focus:outline-none focus:ring-2 focus:ring-violet-100 transition-colors">
                <option value="latest">Newest</option>
                <option value="price_asc">Price: Low to High</option>
                <option value="price_desc">Price: High to Low</option>
                <option value="rating">Top Rated</option>
            </select>
        </div>
    </div>

    {{-- Active filters / results count --}}
    <div class="mb-6 flex items-center justify-between">
        <p class="text-sm text-zinc-500">
            @if ($search || $categorySlug)
                <span class="font-medium text-zinc-900">{{ $products->total() }}</span> result{{ $products->total() !== 1 ? 's' : '' }}
                @if ($search) for "<span class="font-medium text-zinc-900">{{ $search }}</span>"@endif
                @if ($categorySlug) in <span class="font-medium text-zinc-900">{{ $categories->firstWhere('slug', $categorySlug)?->name }}</span>@endif
            @else
                Showing <span class="font-medium text-zinc-900">{{ $products->total() }}</span> products
            @endif
        </p>

        @if ($search || $categorySlug)
            <button wire:click="$set('search', ''); $set('categorySlug', '')"
                    class="text-xs font-medium text-violet-600 hover:text-violet-700 transition-colors">
                Clear filters
            </button>
        @endif
    </div>

    {{-- Product grid --}}
    @if ($products->isEmpty())
        <div class="flex flex-col items-center justify-center rounded-2xl border border-dashed border-zinc-200 bg-zinc-50 py-24 text-center">
            <div class="mb-4 text-4xl">🔍</div>
            <h3 class="text-lg font-semibold text-zinc-900">No products found</h3>
            <p class="mt-1 text-sm text-zinc-500">Try adjusting your search or filter to find what you're looking for.</p>
            <button wire:click="$set('search', ''); $set('categorySlug', '')"
                    class="mt-6 inline-flex items-center gap-2 rounded-lg bg-violet-600 px-4 py-2 text-sm font-medium text-white hover:bg-violet-700 transition-colors">
                Clear filters
            </button>
        </div>
    @else
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                <div wire:key="product-{{ $product->id }}">
                    <x-product-card :product="$product" />
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if ($products->hasPages())
            <div class="mt-10">
                {{ $products->links() }}
            </div>
        @endif
    @endif

</div>
