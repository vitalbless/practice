<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksManager extends Controller
{
    public function index()
    {
        $menuItems = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'News', 'url' => route('home')],
            ['name' => 'Podcasts', 'url' => route('home')],
            ['name' => 'Resources', 'url' =>  route('home')],
        ];

        return view('welcome', compact('menuItems'));
    }
}
