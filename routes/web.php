<?php

use App\Models\User;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Karo',
    ]);
})->name('home');


Route::get('/users', function () {

    return Inertia::render('Users', [
        'time' => now()->toTimeString(),
        'users' => User::query()
        ->when(request('search'), function ($query, $search) {
            $query->where('name', 'like', "%{$search}%")
            ;
        })
        ->paginate(10)
        ->withQueryString()
        ->through(fn ($user) => [
            'id' => $user->id,
            'name' => $user->name,
        ]),
        'filters' => request()->only(['search']),
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
