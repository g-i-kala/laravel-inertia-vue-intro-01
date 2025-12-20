<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Karo',
    ]);
})->name('home');


Route::get('/users', function () {
    return Inertia::render('Users', [
        'time' => now()->toTimeString(),
    ]);
})->name('users');

Route::get('/config', function () {
    return Inertia::render('Config', [
        'param' => 'param',
    ]);
})->name('config');

Route::post('/logout', function () {
    dd(request('foo'));
})->name('logout');


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
