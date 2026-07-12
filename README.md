# Allen Christopher Portfolio

A Laravel 12 portfolio application prepared for Laravel Cloud. The portfolio is rendered from `resources/views/portfolio.blade.php`, with static images served from `public/images`.

## Local development

Requirements: PHP 8.2+ and Composer.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Open `http://127.0.0.1:8000`. The application health check is available at `/up`.

## Laravel Cloud deployment

1. Push this repository to GitHub, GitLab, or Bitbucket.
2. In Laravel Cloud, create an application from the existing repository.
3. Select PHP 8.2 or newer and configure `APP_URL` for the Cloud domain.
4. Set `APP_ENV=production`, `APP_DEBUG=false`, and generate a secure `APP_KEY` in the environment settings.
5. Use this build command:

```bash
composer install --no-dev --optimize-autoloader
php artisan optimize
```

No database, deploy command, Node build, queue, or persistent storage is required for this portfolio. Laravel Cloud serves the application from `public/` and monitors `/up` as the framework health route.

## Main files

- `resources/views/portfolio.blade.php` — portfolio page
- `public/images/` — animated portfolio artwork
- `routes/web.php` — homepage route
