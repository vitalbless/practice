<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        $menuItems = config('menu');  // Загружаем данные из конфигурации

        // Генерируем полные URL-ы в контроллере, если это необходимо
        foreach ($menuItems as &$item) {
            if ($item['url'] == '/podcast') {
                $item['url'] = route('podcast');
            }
        }

        return view('pages.podcast.podcast', compact('menuItems'));
    }
}
