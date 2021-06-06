<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Administrativo;
use App\Http\Controllers\Site\Inventario;
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

Route::get('/', [Administrativo::class, 'index'])->name('home');
Route::get('empresa', [Administrativo::class, 'empresa'])->name('empresa');
Route::get('empresaedit', [Administrativo::class, 'empresaedit'])->name('empresa.edit');
Route::get('funcionarios', [Administrativo::class, 'funcionarios'])->name('funcionarios');  
Route::get('funcionariosprofile', [Administrativo::class, 'funcionariosprofile'])->name('funcionarios.profile');
Route::get('funcionariosprofileedit', [Administrativo::class, 'funcionariosprofileedit'])->name('funcionarios.edit');
Route::get('inventario', [Inventario::class, 'inventariolista'])->name('inventario.lista');