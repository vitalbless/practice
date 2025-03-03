<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $menuItems = config('menu');  // Загружаем данные из конфигурации

        // Генерируем полные URL-ы в контроллере, если это необходимо
        foreach ($menuItems as &$item) {
            if ($item['url'] == '/blog') {
                $item['url'] = route('blog');
            }
        }

        return view('pages.blog.blog', compact('menuItems'));
    }
}
