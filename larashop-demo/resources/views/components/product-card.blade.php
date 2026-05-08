@props(['product'])

<div class="group flex flex-col overflow-hidden rounded-2xl border border-zinc-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">

    {{-- Image --}}
    <a href="{{ route('products.show', $product) }}" class="block overflow-hidden">
        <div class="aspect-[4/3] overflow-hidden bg-zinc-100">
            <img
                src="{{ $product->image_url }}"
                alt="{{ $product->name }}"
                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                loading="lazy"
            >
        </div>
    </a>

    {{-- Content --}}
    <div class="flex flex-1 flex-col p-4">

        {{-- Category + Bookmark --}}
        <div class="mb-2 flex items-center justify-between">
            <span class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2.5 py-0.5 text-xs font-medium text-violet-700">
                {{ $product->category->icon ?? '' }} {{ $product->category->name }}
            </span>
            {{-- Bookmark placeholder (ready to wire up) --}}
            <button class="rounded-lg p-1 text-zinc-300 transition-colors hover:text-rose-400" title="Save for later">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
            </button>
        </div>

        {{-- Name --}}
        <h3 class="mb-1 line-clamp-2 text-sm font-semibold text-zinc-900">
            <a href="{{ route('products.show', $product) }}" class="hover:text-violet-600 transition-colors">
                {{ $product->name }}
            </a>
        </h3>

        {{-- Description --}}
        <p class="mb-3 line-clamp-2 flex-1 text-xs leading-relaxed text-zinc-500">
            {{ $product->description }}
        </p>

        {{-- Rating --}}
        <div class="mb-3 flex items-center gap-1">
            @for ($i = 1; $i <= 5; $i++)
                <svg class="h-3 w-3 {{ $i <= round($product->rating) ? 'text-amber-400' : 'text-zinc-200' }}" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
            @endfor
            <span class="ml-1 text-xs text-zinc-400">{{ number_format($product->rating, 1) }} ({{ number_format($product->reviews_count) }})</span>
        </div>

        {{-- Price + CTA --}}
        <div class="flex items-center justify-between">
            <span class="text-lg font-bold text-zinc-900">${{ number_format($product->price, 2) }}</span>
            <a href="{{ route('products.show', $product) }}"
               class="inline-flex items-center gap-1 rounded-lg bg-violet-600 px-3 py-1.5 text-xs font-medium text-white transition-colors hover:bg-violet-700">
                View
                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>
