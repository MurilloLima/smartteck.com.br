<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\QuemSomosController;
use App\Http\Controllers\SliderController;
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
// admin
Route::get('/dashboard', [SliderController::class, 'index'])->name('admin.pages.slider.index')->middleware(['auth']);
Route::post('slider/store/', [SliderController::class, 'store'])->name('admin.pages.slider.store');
Route::resource('delete/slider', SliderController::class)->middleware(['auth']);
Route::get('/mensagem', [MensagemController::class, 'index'])->name('admin.pages.mensagem.index')->middleware(['auth']);
Route::get('/noticias', [NoticiasController::class, 'index'])->name('admin.pages.noticias.index')->middleware(['auth']);
Route::get('/quem-somos', [QuemSomosController::class, 'index'])->name('admin.pages.quem-somos.index')->middleware(['auth']);
Route::get('/clientes', [ClientesController::class, 'index'])->name('admin.pages.clientes.index')->middleware(['auth']);

// store quem somos
Route::post('quem-somos/store/', [QuemSomosController::class, 'store'])->name('admin.pages.quem-somos.store');
Route::delete('/quem-somos/delete/{id}', [QuemSomosController::class, 'destroy'])->name('admin.pages.quem-somos.destroy');

//send noticias
Route::post('noticias/store/', [NoticiasController::class, 'store'])->name('admin.pages.noticias.store');
Route::delete('/noticias/delete/{id}', [NoticiasController::class, 'destroy'])->name('admin.pages.noticias.destroy');

//home send contato
Route::post('/send', [MensagemController::class, 'store'])->name('send.contact');


require __DIR__ . '/auth.php';
