# LaraShop — EPI AI Masterclass Demo

A modern tech shop/catalog application built with **Laravel 13**, **Livewire 4**, and **Tailwind CSS v4**.
This project is the live demo for the **EPI AI Masterclass** — showcasing how AI coding tools like
Claude Code and Cursor can build, extend, and refactor a production-style Laravel application in real time.

---

## Tech Stack

| Layer | Technology |
|---|---|
| Language | PHP 8.5 |
| Framework | Laravel 13 |
| Reactive UI | Livewire 4 |
| Styling | Tailwind CSS v4 |
| Database | SQLite (zero-config) |
| Testing | Pest v4 |

---

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

---

## What's Inside

### Pages

| Route | Description |
|---|---|
| `/` | Homepage — hero section, category grid, featured products |
| `/products` | Full catalog with live search, filter, and sort (Livewire) |
| `/products/{slug}` | Product detail page with related products |

### Seeded Data

- **6 categories**: Laptops, Phones, Audio, Gaming, Accessories, Smart Home
- **27 products**: Realistic names, descriptions, prices, ratings, and images

### Livewire `ProductGrid` Component

Powers the catalog page (`app/Livewire/ProductGrid.php`) with:

- Live search (300ms debounce)
- Category filter
- Sort by: Newest / Price Low–High / Price High–Low / Top Rated
- Paginated results

### Future-Demo Placeholders

The UI already contains non-functional placeholders — intentionally ready to wire up live:

| Placeholder | Location | Feature to Build |
|---|---|---|
| Search bar | Navbar | AI-powered or live search |
| Dark mode toggle | Navbar | Alpine.js + Tailwind dark variant |
| Bookmark heart | Product cards | Livewire favorites |
| Add to Cart button | Product detail page | Session-based cart |

---

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

---

## Running Tests

```bash
php artisan test
```

---

## Live Demo Prompts

Copy-paste these prompts directly into **Claude Code** or **Cursor** to build each feature live during the demo.
Each prompt assumes the existing codebase structure — no extra context needed.

---

### Category Filters

```
Wire up the category filter in the ProductGrid Livewire component.
The filter buttons already exist in the products page UI.
Connect them so clicking a category sets an active $category property
and filters the Eloquent query accordingly.
Add an "All" option that clears the filter and shows all products.
Highlight the active filter button visually.
```

---

### Navbar Search Bar

```
Implement the search bar that already exists in the main navbar
(resources/views/components/layouts/app.blade.php).
Build it as a Livewire component that shows a real-time dropdown of matching products
as the user types, with a 300ms debounce.
Each result should show the product name, category, and price, and link to the product detail page.
Show a "No results found" state when nothing matches.
Close the dropdown when clicking outside.
```

---

### Dark Mode

```
Add dark mode to the application using Alpine.js and Tailwind's dark: variant.
Wire up the dark mode toggle button already in the navbar.
Persist the user's preference in localStorage so it survives page refreshes.
Apply dark: utility classes to:
- the main layout background and text
- the navbar
- product cards
- the hero section
- form inputs and filter controls
Swap the toggle button icon between sun and moon based on the current mode.
```

---

### Bookmarks / Favorites

```
Build a bookmarks/favorites feature.
The heart icon already exists on product cards
(resources/views/components/product-card.blade.php).
Wire it up as a Livewire toggle action:
- clicking the heart saves or removes the product from a favorites list stored in the session
- the heart icon fills/unfills to reflect current state
- add a favorites count badge to the navbar icon
Create a /favorites page that lists all saved products using the existing product-card component.
Show an empty state with a call-to-action when no favorites exist.
```

---

### Add to Cart

```
Implement a shopping cart system.
The "Add to Cart" button already exists on the product detail page
(resources/views/products/show.blade.php).
Build a Cart service or Livewire component that stores cart items
(product_id + quantity) in the session.
Show a cart item count badge in the navbar.
Create a /cart page with:
- list of cart items with product image, name, price, and quantity
- quantity increment/decrement controls
- remove item button
- order subtotal
- a "Continue Shopping" link back to /products
```

---

### AI-Powered Natural Language Search

```
Add AI-powered natural language search to the products page.
Create a new Livewire component AiSearch with a text input at the top of the catalog.
When the user submits a query like "something good for gaming under 500 dollars",
send it to the Anthropic API using the claude-haiku-4-5 model.
Ask the model to extract structured search criteria: category, max_price, keywords.
Use those criteria to filter the products Eloquent query.
Show a summary of what the AI understood from the query (e.g. "Showing Gaming products under $500").
Gracefully fall back to showing all products if the API call fails.
```

---

### Product Sorting

```
Add a sort dropdown to the ProductGrid Livewire component
(resources/views/livewire/product-grid.blade.php).
Options: Newest, Price Low→High, Price High→Low, Top Rated.
Wire it to a $sort Livewire property and update the Eloquent query's orderBy clause accordingly.
Persist the selected sort option visually in the dropdown.
Reset to page 1 when the sort option changes.
```

---

## The Prompt That Generated This Project

> This project was scaffolded in a single Claude Code session using the prompt below.
> It demonstrates how AI tools can generate a complete, production-style Laravel application
> from a detailed specification.

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
