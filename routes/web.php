<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\PedidoController;

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
    return view('auth.Login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/Index', function () {
    return view('Index');
})->name('Index');


Route::middleware(['auth:sanctum','verified'])->resource('inventarios',InventarioController::class);
Route::middleware(['auth:sanctum','verified'])->resource('bodegas',BodegaController::class);
Route::middleware(['auth:sanctum','verified'])->resource('usuarios',UserController::class);
Route::middleware(['auth:sanctum','verified'])->resource('asistencias',AsistenciaController::class);
Route::middleware(['auth:sanctum','verified'])->resource('facturas',FacturaController::class);
Route::middleware(['auth:sanctum','verified'])->resource('pedidos',PedidoController::class);
