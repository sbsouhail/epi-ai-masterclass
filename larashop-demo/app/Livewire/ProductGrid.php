<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ProductGrid extends Component
{
    use WithPagination;

    public string $search = '';
    public string $categorySlug = '';
    public string $sortBy = 'latest';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingCategorySlug(): void
    {
        $this->resetPage();
    }

    public function render(): View
    {
        $products = Product::query()
            ->with('category')
            ->when($this->search, fn ($q) => $q
                ->where('name', 'like', "%{$this->search}%")
                ->orWhere('description', 'like', "%{$this->search}%"))
            ->when($this->categorySlug, fn ($q) => $q
                ->whereHas('category', fn ($q) => $q->where('slug', $this->categorySlug)))
            ->when($this->sortBy === 'price_asc', fn ($q) => $q->orderBy('price'))
            ->when($this->sortBy === 'price_desc', fn ($q) => $q->orderByDesc('price'))
            ->when($this->sortBy === 'rating', fn ($q) => $q->orderByDesc('rating'))
            ->when($this->sortBy === 'latest', fn ($q) => $q->latest())
            ->paginate(12);

        $categories = Category::withCount('products')->get();

        return view('livewire.product-grid', compact('products', 'categories'));
    }
}
