# Allen Christopher Portfolio

A Laravel 12 portfolio application prepared for Laravel Cloud. The presentation layer is split into a shared layout, site partials, and focused portfolio sections. Frontend assets are compiled with Vite and Tailwind CSS 4.

## Local development

Requirements: PHP 8.2+, Composer, and Node.js.

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
composer run dev
```

Open `http://127.0.0.1:8000`. The application health check is available at `/up`.

## Quality checks

```bash
php artisan test
npm run build
```

## Laravel Cloud deployment

1. Push this repository to GitHub, GitLab, or Bitbucket.
2. In Laravel Cloud, create an application from the existing repository.
3. Select PHP 8.2 or newer and configure `APP_URL=https://allenaduan.com`.
4. Set `APP_ENV=production`, `APP_DEBUG=false`, and generate a secure `APP_KEY` in the environment settings.
5. Configure the build commands:

```bash
composer install --no-dev --optimize-autoloader
npm ci
npm run build
php artisan optimize
```

No database, deploy command, queue, or persistent storage is required. Laravel Cloud serves the application from `public/` and monitors `/up` as the framework health route.

## Project structure

- `resources/views/layouts/app.blade.php` — shared document layout and metadata
- `resources/views/partials/site/` — shared navigation and footer
- `resources/views/pages/portfolio/` — page composition and focused sections
- `resources/css/app.css` — Tailwind theme and site styles
- `resources/js/app.js` — site interactions
- `public/images/` — portfolio artwork
- `tests/Feature/PortfolioPageTest.php` — homepage feature coverage
