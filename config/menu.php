<?php

return [
    [
        'name' => 'Home',
        'url' => '/',  // Путь без использования url()
        'subItems' => [
            ['name' => 'Features', 'url' => '/#features'],
            ['name' => 'Blogs', 'url' => '/#blogs'],
            ['name' => 'Testimonials', 'url' => '/#testimonials'],
            ['name' => 'Contact Us', 'url' => '/#contact-us'],
            ['name' => 'Newsletter', 'url' => '/#news-letter'],
        ],
    ],
    [
        'name' => 'News',
        'url' => '/news',
        'subItems' => [
            ['name' => 'Trending Stories', 'url' => '/#trending-stories'],
            ['name' => 'Featured Videos', 'url' => '/#featured-videos'],
            ['name' => 'Technology', 'url' => '/#technology'],
            ['name' => 'Health', 'url' => '/#health'],
            ['name' => 'Politics', 'url' => '/#politics'],
            ['name' => 'Environment', 'url' => '/#environment'],
        ],
    ],
    [
        'name' => 'Blog',
        'url' => '/blog',
        'subItems' => [
            ['name' => 'Quantum Computing', 'url' => '/#episodes'],
            ['name' => 'AI Ethics', 'url' => '/#hosts'],
            ['name' => 'Space Exploration', 'url' => '/#episodes'],
            ['name' => 'Biotechnology', 'url' => '/#hosts'],
            ['name' => 'Renewable Energy', 'url' => '/#episodes'],
            ['name' => 'Biohacking', 'url' => '/#hosts'],
        ],
    ],
    [
        'name' => 'Podcast',
        'url' => '/podcast',
        'subItems' => [
            ['name' => 'AI Revolution', 'url' => '/#ai-revolution'],
            ['name' => 'AI News', 'url' => '/#ai-news'],
            ['name' => 'TechTalk AI', 'url' => '/#techTalk-ai'],
            ['name' => 'AI Conversations', 'url' => '/#ai-conversations'],
        ],
    ],
    [
        'name' => 'Resources',
        'url' => '/resources',
        'subItems' => [
            ['name' => 'Whitepapers', 'url' => '/#whitepapers'],
            ['name' => 'Ebooks', 'url' => '/#ebooks'],
            ['name' => 'Reports', 'url' => '/#reports'],
            ['name' => 'Research Papers', 'url' => '/#research-papers'],
        ],
    ],
];
