<?php

use App\Http\Controllers\LinksManager;
use Illuminate\Support\Facades\Route;

Route::get('/', [LinksManager::class, 'index'])->name('home');
