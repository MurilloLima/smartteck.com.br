<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\MissaoController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\QuemSomosController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ValoresController;
use App\Http\Controllers\VisaoController;
use App\Models\Noticias;
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
Route::get('/admin/noticias', [NoticiasController::class, 'index'])->name('admin.pages.noticias.index')->middleware(['auth']);
Route::get('/quem-somos', [QuemSomosController::class, 'index'])->name('admin.pages.quem-somos.index')->middleware(['auth']);
Route::get('/clientes', [ClientesController::class, 'index'])->name('admin.pages.clientes.index')->middleware(['auth']);
//missao
Route::get('/missao', [MissaoController::class, 'index'])->name('admin.pages.missao.index')->middleware(['auth']);
Route::post('missao/store/', [MissaoController::class, 'store'])->name('admin.pages.missao.store')->middleware(['auth']);
Route::delete('/missao/delete/{id}', [MissaoController::class, 'destroy'])->name('admin.pages.missao.destroy');
//Visao
Route::get('/visao', [VisaoController::class, 'index'])->name('admin.pages.visao.index')->middleware(['auth']);
Route::post('visao/store/', [VisaoController::class, 'store'])->name('admin.pages.visao.store')->middleware(['auth']);
Route::delete('/visao/delete/{id}', [VisaoController::class, 'destroy'])->name('admin.visao.missao.destroy');
//Valores
Route::get('/valores', [ValoresController::class, 'index'])->name('admin.pages.valores.index')->middleware(['auth']);
Route::post('valores/store/', [ValoresController::class, 'store'])->name('admin.pages.valores.store')->middleware(['auth']);
Route::delete('/valores/delete/{id}', [ValoresController::class, 'destroy'])->name('admin.pages.valores.destroy');

//send noticias
Route::post('noticias/store/', [NoticiasController::class, 'store'])->name('admin.pages.noticias.store');
Route::delete('/noticias/delete/{id}', [NoticiasController::class, 'destroy'])->name('admin.pages.noticias.destroy');
// end admin

// endereco
Route::get('/endereco', [EnderecoController::class, 'index'])->name('admin.pages.endereco.index')->middleware(['auth']);
Route::post('endereco/store/', [EnderecoController::class, 'store'])->name('admin.pages.endereco.store')->middleware(['auth']);
Route::get('endereco/edit/{id}', [EnderecoController::class, 'edit'])->name('endereco.edit');
Route::post('endereco/update/', [EnderecoController::class, 'update'])->name('endereco.update');
Route::get('endereco/delete/{id}', [EnderecoController::class, 'destroy'])->name('endereco.delete');
//home 
Route::get('/', [HomeController::class, 'index'])->name('home.pages.index');
Route::get('contatos/', [HomeController::class, 'contact'])->name('home.pages.contact');
Route::get('noticias/', [HomeController::class, 'noticias'])->name('home.pages.noticias');


Route::post('/send', [MensagemController::class, 'store'])->name('send.contact');


require __DIR__ . '/auth.php';
