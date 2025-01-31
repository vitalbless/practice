<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index()
    {
        $menuItems = config('menu');  // Загружаем данные из конфигурации

        // Генерируем полные URL-ы в контроллере, если это необходимо
        foreach ($menuItems as &$item) {
            if ($item['url'] == '/resources') {
                $item['url'] = route('resources');
            }
        }

        return view('pages.resources.resources', compact('menuItems'));
    }
}
