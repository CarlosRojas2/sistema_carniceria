<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('categorias', CategoriaController ::class)->middleware(['auth']);
Route::resource('productos', ProductoController ::class)->middleware(['auth']);
Route::resource('proveedors', ProveedorController ::class)->middleware(['auth']);
Route::resource('materias', MateriaController ::class)->middleware(['auth']);
