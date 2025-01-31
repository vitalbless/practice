<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ResourcesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/podcast', [PodcastController::class, 'index'])->name('podcast');
Route::get('/resources', [ResourcesController::class, 'index'])->name('resources');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
