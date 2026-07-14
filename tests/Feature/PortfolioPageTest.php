<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioPageTest extends TestCase
{
    public function test_portfolio_page_is_rendered(): void
    {
        $response = $this->get(route('home'));

        $response
            ->assertOk()
            ->assertSee('Allen Christopher')
            ->assertSee('Software with', escape: false)
            ->assertSee('business.allen.dev@gmail.com')
            ->assertSee('<link rel="canonical" href="'.route('home').'">', escape: false)
            ->assertSee('application/ld+json', escape: false)
            ->assertSee('https://schema.org', escape: false)
            ->assertSee('ProfilePage', escape: false)
            ->assertSee('Who is Allen Christopher Aduan?');

        preg_match(
            '/<script type="application\/ld\+json">(.*?)<\/script>/s',
            $response->getContent(),
            $matches,
        );

        $structuredData = json_decode($matches[1] ?? '', true, flags: JSON_THROW_ON_ERROR);

        $this->assertSame('https://schema.org', $structuredData['@context']);
        $this->assertSame('allenaduan.com', $structuredData['@graph'][0]['alternateName']);
        $this->assertSame('ProfilePage', $structuredData['@graph'][1]['@type']);
        $this->assertSame('Allen Christopher Aduan', $structuredData['@graph'][2]['name']);
    }

    public function test_xml_sitemap_lists_the_homepage(): void
    {
        $this->get(route('sitemap'))
            ->assertOk()
            ->assertHeader('Content-Type', 'application/xml')
            ->assertSee('<loc>'.route('home').'</loc>', escape: false);
    }
}
