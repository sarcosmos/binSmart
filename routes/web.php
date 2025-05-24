<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('index', function () {
    return Inertia::render('Index');
})->middleware(['auth', 'verified'])->name('index');

Route::get('trash', function () {
    return Inertia::render('Trash');
})->middleware(['auth', 'verified'])->name('trash');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
