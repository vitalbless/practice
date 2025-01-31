<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menuItems = config('menu');  // Загружаем данные из конфигурации

        // Генерируем полные URL-ы в контроллере, если это необходимо
        foreach ($menuItems as &$item) {
            if ($item['url'] == '/') {
                $item['url'] = route('home');
            }
        }

        return view('pages.home.home', compact('menuItems'));
    }
}
