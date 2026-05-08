# LaraShop — EPI AI Masterclass Demo

A modern tech shop/catalog application built with Laravel 13, Livewire 4, and Tailwind CSS v4. This project serves as the live demo for the **EPI AI Masterclass** — showcasing how AI coding tools like Claude Code can build, extend, and refactor a production-style Laravel application in real time.

## Tech Stack

- **PHP** 8.5
- **Laravel** 13
- **Livewire** 4
- **Tailwind CSS** v4
- **SQLite** (zero-config database)
- **Pest** v4 (testing)

## Getting Started

```bash
# Install PHP dependencies
composer install

# Copy environment file and generate app key
cp .env.example .env
php artisan key:generate

# Run migrations and seed the database (6 categories, 27 products)
php artisan migrate --seed

# Install JS dependencies and build assets
pnpm install
pnpm run build

# Start the dev server
php artisan serve
```

Or use the all-in-one dev command (server + queue + logs + Vite):

```bash
composer run dev
```

## What's Inside

### Pages

| Route | Description |
|---|---|
| `/` | Homepage — hero, category grid, featured products |
| `/products` | Full catalog with live search, filter, sort (Livewire) |
| `/products/{slug}` | Product detail with related products |

### Seeded Data

- **6 categories**: Laptops, Phones, Audio, Gaming, Accessories, Smart Home
- **27 products**: Realistic names, descriptions, prices, ratings, and images

### Livewire `ProductGrid` Component

The `app/Livewire/ProductGrid.php` component powers the catalog page with:

- Live search (300ms debounce)
- Category filter
- Sort by: Newest / Price Low–High / Price High–Low / Top Rated
- Paginated results

### Future-Demo Placeholders

The UI already contains non-functional placeholders that are intentionally ready to wire up during the live AI demo:

- **Search bar** in navbar → AI-powered search
- **Dark mode toggle** → Alpine.js + Tailwind dark variant
- **Bookmark heart** on product cards → Livewire favorites
- **Add to Cart** button on product detail → cart system

## Project Structure

```
app/
├── Http/Controllers/
│   ├── HomeController.php
│   └── ProductController.php
├── Livewire/
│   └── ProductGrid.php
└── Models/
    ├── Category.php
    └── Product.php

database/
├── factories/
│   ├── CategoryFactory.php
│   └── ProductFactory.php
├── migrations/
│   ├── ..._create_categories_table.php
│   └── ..._create_products_table.php
└── seeders/
    ├── CategorySeeder.php
    ├── ProductSeeder.php
    └── DatabaseSeeder.php

resources/views/
├── components/
│   ├── layouts/app.blade.php     ← main layout
│   └── product-card.blade.php   ← reusable card component
├── home.blade.php
├── livewire/
│   └── product-grid.blade.php
└── products/
    ├── index.blade.php
    └── show.blade.php
```

## Running Tests

```bash
php artisan test
```

---

## The Prompt That Generated This Project

> This project was scaffolded in a single Claude Code session using the prompt below. It demonstrates how AI tools can generate a complete, production-style Laravel application from a detailed specification.

```
Create a modern Laravel 13 web application for a university AI presentation demo.

The application is a simple modern shop/catalog application that will later be used to
demonstrate AI-assisted development using Claude and AI coding workflows.

IMPORTANT:
The project must be intentionally designed so it is EASY to extend live during a presentation.

The codebase should be:
- clean
- simple
- organized
- beginner-friendly
- production-style but lightweight
- easy for AI tools to understand and modify

--------------------------------------------------
🎯 MAIN GOAL
--------------------------------------------------

Build a visually clean shop/catalog application with:
- seeded products
- categories
- modern UI
- responsive design
- realistic fake data

The app should already feel complete and polished BEFORE the live AI demo.

Later during the presentation we may add features like:
- dark mode
- bookmarks/favorites
- category filtering
- sorting
- search
- AI-powered search
- product recommendations

Therefore the architecture and UI must already be PREPARED for future extension.

--------------------------------------------------
⚙️ TECH STACK
--------------------------------------------------

Use:
- Laravel 13
- Livewire
- Blade templates
- TailwindCSS
- SQLite (default)

IMPORTANT:
- Use Livewire for interactive UI parts
- Keep frontend architecture simple and clean
- No Vue
- No React
- No Inertia
- No unnecessary packages

The application should showcase modern Laravel + Livewire best practices.

--------------------------------------------------
🧱 REQUIRED FEATURES
--------------------------------------------------

Create:

1. Homepage
- hero section
- modern landing feel
- featured products
- categories preview

2. Products Page
- responsive product grid
- modern product cards
- product image
- title
- short description
- price
- category badge
- rating/mock reviews optional

3. Product Details Page
- larger image
- clean layout
- product info
- related products section

4. Categories
- products belong to categories
- categories already seeded
- relationships cleanly implemented

--------------------------------------------------
🗃️ DATABASE & SEEDING
--------------------------------------------------

Seed realistic demo data:
- 20–30 products
- 5–6 categories

Example categories:
- Laptops
- Phones
- Audio
- Gaming
- Accessories
- Smart Home

Products should feel realistic and visually interesting.

Use:
- factories
- seeders
- proper relationships

--------------------------------------------------
🖼️ IMAGES
--------------------------------------------------

IMPORTANT:
The app must include product images.

Use:
- publicly accessible placeholder/demo images
OR
- generated local placeholder assets

Images should:
- look modern
- fit product categories
- make the UI visually impressive

Avoid broken links.

--------------------------------------------------
🎨 UI / UX REQUIREMENTS
--------------------------------------------------

The UI is VERY IMPORTANT.

Design goals:
- modern SaaS/ecommerce feel
- elegant spacing
- smooth cards
- subtle hover effects
- visually impressive but simple
- responsive
- clean typography

Style inspiration:
- Apple
- Linear
- Stripe
- Vercel
- modern Tailwind websites

Use:
- rounded cards
- soft shadows
- subtle gradients
- elegant navbar
- polished layouts

--------------------------------------------------
🧠 VERY IMPORTANT ARCHITECTURE REQUIREMENTS
--------------------------------------------------

The application MUST be intentionally prepared for future AI demos.

Prepare the codebase so features can easily be added later:

- dark mode
- bookmarks/favorites
- filtering
- sorting
- search
- AI integrations

This means:
- reusable Blade components
- reusable Livewire components
- organized structure
- clean routes
- clean controllers
- no hardcoded messy logic

--------------------------------------------------
📦 FUTURE-READY UI PREPARATION
--------------------------------------------------

Prepare visual placeholders or layout space for:
- filter bar
- search bar
- bookmark icon
- dark mode toggle

They do NOT need to function yet.

But the UI should already feel ready for these features.

--------------------------------------------------
⚡ LIVEWIRE REQUIREMENTS
--------------------------------------------------

Use Livewire where it naturally makes sense.

Examples:
- product grid interactions
- future-ready filter/search area
- reusable UI blocks

Keep components:
- small
- readable
- presentation-friendly
- easy to modify live with AI

Avoid overengineering.

--------------------------------------------------
🚀 PERFORMANCE & SIMPLICITY
--------------------------------------------------

Keep everything:
- lightweight
- readable
- easy to explain live

Avoid:
- advanced architecture
- complex state management
- unnecessary abstractions
- enterprise complexity

--------------------------------------------------
📚 CODE QUALITY
--------------------------------------------------

The generated code should:
- follow Laravel conventions
- follow Livewire best practices
- be easy for students to understand
- be easy for Claude/Cursor to modify later
- include comments ONLY when useful

--------------------------------------------------
🎤 PRESENTATION OPTIMIZATION
--------------------------------------------------

This project will be used LIVE during a university presentation.

Therefore:
- UI should look polished immediately
- pages should load fast
- setup should be reliable
- no complicated configuration
- demo-friendly structure
- easy to modify live

--------------------------------------------------
📌 OUTPUT
--------------------------------------------------

Provide:
- complete Laravel code
- migrations
- models
- factories
- seeders
- Livewire components
- controllers if needed
- routes
- Blade views
- Tailwind styling
- image handling

Ensure the project is runnable immediately after:
- composer install
- php artisan migrate --seed
- pnpm install && pnpm run build
- php artisan serve
```

---

## License

MIT
