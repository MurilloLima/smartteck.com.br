<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Home
Route::get('/', function () {
    return view('home.pages.index');
});



//admin
Route::get('/dashboard', function () {
    return view('admin.pages.index');
})->middleware(['auth'])->name('admin.index');
require __DIR__ . '/auth.php';

Route::get('/mensagem', function () {
    return view('admin.pages.message');
})->middleware(['auth'])->name('admin.mensagem');

Route::get('/clientes', function () {
    return view('admin.pages.clientes');
})->middleware(['auth'])->name('admin.clientes');

Route::get('/noticias', function () {
    return view('admin.pages.noticias');
})->middleware(['auth'])->name('admin.noticias');

Route::get('/quem-somos', function () {
    return view('admin.pages.quem-somos');
})->middleware(['auth'])->name('admin.quem-somos');

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('contact', 'contact')->name('home.contact');
    Route::post('contact/', 'store')->name('contact.store');

    // Route::post('clientes', 'store')->name('clientes.store')->middleware(['auth']);
    // Route::get('clientes/create', 'create')->name('clientes.create')->middleware(['auth']);
    // Route::get('clientes/{item}', 'show')->name('clientes.show')->middleware(['auth']);
    // Route::put('clientes/{item}', 'update')->name('clientes.update')->middleware(['auth']);
    // Route::delete('clientes/{item}', 'destroy')->name('clientes.destroy')->middleware(['auth']);
    // Route::get('clientes/{item}/edit', 'edit')->name('clientes.edit')->middleware(['auth']);
});
