<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $menuItems = config('menu');  // Загружаем данные из конфигурации

        // Генерируем полные URL-ы в контроллере, если это необходимо
        foreach ($menuItems as &$item) {
            if ($item['url'] == '/news') {
                $item['url'] = route('news');
            }
        }

        return view('pages.news.news', compact('menuItems'));
    }
}
