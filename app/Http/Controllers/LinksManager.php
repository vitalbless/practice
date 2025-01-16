<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksManager extends Controller
{
    public function index()
    {
        $menuItems =  [
            [
                'name' => 'Home',
                'url' => route('home'),
                'subItems' => [
                    ['name' => 'Features', 'url' => route('home') . '#features'],
                    ['name' => 'Blogs', 'url' => route('home') . '#blogs'],
                    ['name' => 'Testimonials', 'url' => route('home') . '#testimonials'],
                    ['name' => 'Contact Us', 'url' => route('home') . '#contact-us'],
                    ['name' => 'Newsletter', 'url' => route('home') . '#news-letter'],
                ],
            ],
            [
                'name' => 'News',
                'url' => route('home'),
                'subItems' => [
                    ['name' => 'Trending Stories', 'url' => route('home') . '#trending-stories'],
                    ['name' => 'Featured Videos', 'url' => route('home') . '#featured-videos'],
                    ['name' => 'Technology', 'url' => route('home') . '#technology'],
                    ['name' => 'Health', 'url' => route('home') . '#health'],
                    ['name' => 'Politics', 'url' => route('home') . '#politics'],
                    ['name' => 'Environment', 'url' => route('home') . '#environment'],
                ],
            ],
            [
                'name' => 'Blogs',
                'url' => route('home'),
                'subItems' => [
                    ['name' => 'Quantum Computing', 'url' => route('home') . '#episodes'],
                    ['name' => 'AI Ethics', 'url' => route('home') . '#hosts'],
                    ['name' => 'Space Exploration', 'url' => route('home') . '#episodes'],
                    ['name' => 'Biotechnology', 'url' => route('home') . '#hosts'],
                    ['name' => 'Renewable Energy', 'url' => route('home') . '#episodes'],
                    ['name' => 'Biohacking', 'url' => route('home') . '#hosts'],
                ],
            ],
            [
                'name' => 'Podcast',
                'url' => route('home'),
                'subItems' => [
                    ['name' => 'AI Revolution', 'url' => route('home') . '#ai-revolution'],
                    ['name' => 'AI News', 'url' => route('home') . '#ai-news'],
                    ['name' => 'TechTalk AI', 'url' => route('home') . '#techTalk-ai'],
                    ['name' => 'AI Conversations', 'url' => route('home') . '#ai-conversations'],
                ],
            ],
            [
                'name' => 'Resources',
                'url' => route('home'),
                'subItems' => [
                    ['name' => 'Whitepapers', 'url' => route('home') . '#whitepapers'],
                    ['name' => 'Ebooks', 'url' => route('home') . '#ebooks'],
                    ['name' => 'Reports', 'url' => route('home') . '#reports'],
                    ['name' => 'Research Papers', 'url' => route('home') . '#research-papers'],
                ],
            ],
        ];

        return view('welcome', compact('menuItems'));
    }
}
