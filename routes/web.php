<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

Route::get('/Home', function () {
    return view('welcome');
});
Route::get('/Clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
Route::get('/Cliente/{cliente}', [App\Http\Controllers\ClienteController::class, 'show'])->name('cliente.show');
Route::get('/Cliente/edit/{cliente}', [App\Http\Controllers\ClienteController::class, 'edit'])->name('cliente.edit');
Route::get('/ClienteAgregar', [App\Http\Controllers\ClienteController::class, 'create'])->name('clientes.create');
Route::post('/Cliente/a', [App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.guardar');
Route::post('/Cliente', [App\Http\Controllers\ClienteController::class, 'update'])->name('cliente.update');
Route::get('/Cliente/Eliminar/{cliente}', [App\Http\Controllers\ClienteController::class, 'delete'])->name('cliente.delete');
Route::post('/Clientes', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('cliente.destroy');



Route::get('/Empleados', [App\Http\Controllers\EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/Empleado/Create', [App\Http\Controllers\EmpleadoController::class, 'create'])->name('empleado.create');
Route::post('/Empleado', [App\Http\Controllers\EmpleadoController::class, 'store'])->name('empleado.store');
Route::get('/Empleado/Edit/{empleado}', [App\Http\Controllers\EmpleadoController::class, 'edit'])->name('empleado.edit');
Route::post('/Empleados', [App\Http\Controllers\EmpleadoController::class, 'update'])->name('empleado.update');
Route::get('/Empleado/Show/{empleado}', [App\Http\Controllers\EmpleadoController::class, 'show'])->name('empleado.show');
Route::get('/Empleado/Delete/{empleado}', [App\Http\Controllers\EmpleadoController::class, 'delete'])->name('empleado.delete');

Route::post('/Empleados', [App\Http\Controllers\EmpleadoController::class, 'destroy'])->name('empleado.destroy');



Route::get('/Productos', [App\Http\Controllers\ProductosController::class, 'index'])->name('produtos.index');
Route::get('/Productos/Show/{producto}', [App\Http\Controllers\ProductosController::class, 'show'])->name('producto.show');
Route::get('/Productos/Edit/{producto}', [App\Http\Controllers\ProductosController::class, 'edit'])->name('producto.edit');
Route::get('/Productos/Agregar', [App\Http\Controllers\ProductosController::class, 'create'])->name('productos.create');
Route::post('/Producto/a', [App\Http\Controllers\ProductosController::class, 'nuevo'])->name('producto.nuevo');
Route::post('/Producto', [App\Http\Controllers\ProductosController::class, 'update'])->name('producto.update');
Route::get('/Productos/Delete/{producto}', [App\Http\Controllers\ProductosController::class, 'delete'])->name('producto.delete');
Route::post('/Productos', [App\Http\Controllers\ProductosController::class, 'destroy'])->name('producto.destroy');

Route::get('/Ventas', [App\Http\Controllers\VentasController::class, 'index'])->name('ventas.index');
Route::get('/Ventas/Create', [App\Http\Controllers\VentasController::class, 'create'])->name('ventas.create');
Route::post('/Ventas', [App\Http\Controllers\VentasController::class, 'store'])->name('ventas.store');

Route::get('/Ventas/Tickets/{venta}', [App\Http\Controllers\VentasController::class, 'ver'])->name('ventas.ver');

