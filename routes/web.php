<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.portfolio.index')->name('home');

Route::get('/sitemap.xml', function () {
    return response()
        ->view('seo.sitemap')
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
