<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.pages.index');
});

Route::get('/dashboard', function () {
    return view('admin.pages.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
