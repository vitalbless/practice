<?php

use App\Http\Controllers\LinksManager;
use Illuminate\Support\Facades\Route;

Route::get('/', [LinksManager::class, 'index'])->name('home');
Route::get('/blog', function () {
    return view('pages.home.home');
})->name('news');
Route::get('/news', function () {
    return view('pages.home.home');
})->name('blog');
Route::get('/podcasts', function () {
    return view('pages.home.home');
})->name('podcasts');
Route::get('/resources', function () {
    return view('pages.home.home');
})->name('resources');
Route::get('/contact', function () {
    return view('pages.home.home');
})->name('contact');
