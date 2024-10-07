<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create();

        // Add static pages
        $sitemap->add(Url::create('/')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1.0));
        
        $sitemap->add(Url::create('/about-us')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.8));

        // Add dynamic routes (for example, blog posts or products)
        $posts = \App\Models\Post::all(); // Example for blog posts, change based on your app
        foreach ($posts as $post) {
            $sitemap->add(Url::create("/post/{$post->slug}")
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.9));
        }

        // Store sitemap to public folder
        $sitemap->writeToFile(public_path('sitemap.xml'));

        return $sitemap->render('xml');
    }
}
