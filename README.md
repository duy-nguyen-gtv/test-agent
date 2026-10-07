# test-agent

A Laravel sandbox application — a small marketing site with session-based auth, a contact form, a product catalog, and a few static pages. Used for exercising AI coding agents.

## Stack

- [Laravel](https://laravel.com) ^13 on PHP ^8.3
- SQLite (default), Blade + [Tailwind CSS v4](https://tailwindcss.com) via Vite 8
- [Pest](https://pestphp.com) for tests, [Pint](https://laravel.com/docs/pint) for formatting
- [Laravel Boost](https://laravel.com/docs/ai) dev tools for AI agents

## Setup

```bash
composer setup
```

This runs `composer install`, copies `.env.example` to `.env`, generates an app key, migrates, installs npm dependencies, and builds assets.

For local development:

```bash
composer dev
```

## Routes

| Method | URI | Description |
| --- | --- | --- |
| GET | `/` | Homepage |
| GET/POST | `/register` | Registration (logs the user in) |
| GET/POST | `/login` | Login (throttled to 5 attempts/min) |
| GET/POST | `/contacts` | Contact form (submissions are logged) |
| GET | `/products` | Product catalog, ordered by name |
| GET | `/tos` | Terms of use |
| GET | `/poc` | Proof-of-concept page |
| GET | `/teams-at-scale` | Teams/marketing page |

## Testing

```bash
composer test          # full suite
php artisan test --compact --filter=ProductControllerTest
vendor/bin/pint        # format changed PHP files
```

## Project structure

```
app/Http/Controllers/   AuthenticatedSession, RegisteredUser, Contact, Product
app/Http/Requests/      Login, Register, Contact form validation
app/Models/             User, Product
database/migrations/    users, cache, jobs, products
resources/views/        Blade templates
routes/web.php          All web routes
tests/Feature/          Controller and page tests
```

## Agent configuration

`.agentouch.yml` defines the container setup, `php artisan serve` on port 8000, and the verify gate (`vendor/bin/pint --test` + `php artisan test --compact`).
