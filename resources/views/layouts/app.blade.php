<!doctype html>
<html lang="en" class="scroll-smooth">
    @php
        $seo = config('portfolio');
        $canonicalUrl = route('home');
        $profileImage = asset('images/allen-cartoon-hero-glasses.png');
        $structuredData = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'WebSite',
                    '@id' => $canonicalUrl.'#website',
                    'url' => $canonicalUrl,
                    'name' => $seo['display_name'],
                    'alternateName' => 'allenaduan.com',
                    'inLanguage' => 'en',
                ],
                [
                    '@type' => 'ProfilePage',
                    '@id' => $canonicalUrl.'#profile',
                    'url' => $canonicalUrl,
                    'name' => $seo['title'].' | '.$seo['display_name'],
                    'description' => $seo['description'],
                    'isPartOf' => ['@id' => $canonicalUrl.'#website'],
                    'mainEntity' => ['@id' => $canonicalUrl.'#person'],
                    'inLanguage' => 'en',
                ],
                [
                    '@type' => 'Person',
                    '@id' => $canonicalUrl.'#person',
                    'name' => $seo['name'],
                    'alternateName' => $seo['display_name'],
                    'url' => $canonicalUrl,
                    'image' => $profileImage,
                    'jobTitle' => 'Software Engineer',
                    'description' => $seo['description'],
                    'email' => 'mailto:'.$seo['email'],
                    'sameAs' => array_values($seo['profiles']),
                    'knowsAbout' => $seo['expertise'],
                    'address' => [
                        '@type' => 'PostalAddress',
                        'addressLocality' => $seo['location']['city'],
                        'addressCountry' => $seo['location']['country_code'],
                    ],
                    'alumniOf' => [
                        '@type' => 'CollegeOrUniversity',
                        'name' => 'University of Rizal System',
                    ],
                ],
            ],
        ];
    @endphp
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $seo['description'] }}">
        <meta name="author" content="{{ $seo['name'] }}">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="theme-color" content="#07090f">

        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="canonical" href="{{ $canonicalUrl }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <meta property="og:type" content="profile">
        <meta property="og:locale" content="en_AE">
        <meta property="og:site_name" content="{{ $seo['display_name'] }}">
        <meta property="og:title" content="{{ $seo['title'] }} | {{ $seo['display_name'] }}">
        <meta property="og:description" content="{{ $seo['description'] }}">
        <meta property="og:url" content="{{ $canonicalUrl }}">
        <meta property="og:image" content="{{ $profileImage }}">
        <meta property="og:image:alt" content="Illustrated portrait of {{ $seo['name'] }}, Software Engineer in Dubai">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo['title'] }} | {{ $seo['display_name'] }}">
        <meta name="twitter:description" content="{{ $seo['description'] }}">
        <meta name="twitter:image" content="{{ $profileImage }}">
        <meta name="twitter:image:alt" content="Illustrated portrait of {{ $seo['name'] }}">

        <title>@yield('title', $seo['title'].' | '.$seo['display_name'])</title>

        <script type="application/ld+json">{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('head')
    </head>
    <body class="bg-ink font-sans text-white antialiased">
        <div class="noise pointer-events-none fixed inset-0 z-[100] opacity-[.025]"></div>
        <div class="cursor-glow pointer-events-none fixed inset-0 z-0 hidden lg:block"></div>

        @include('partials.site.header')

        <main class="relative z-10">
            @yield('content')
        </main>

        @include('partials.site.footer')
        @stack('scripts')
    </body>
</html>
