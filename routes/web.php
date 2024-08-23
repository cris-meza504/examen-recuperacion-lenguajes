<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/productos/obtener/todos",[ProductoController::class, 'obtenerProductos'])->name('obtener.producto');

Route::get("/producto/crear",[ProductoController::class,'crearProducto'])->name('crear.producto');

Route::post("producto/guardar",[ProductoController::class, 'guardarProducto'])->name('guardar.producto');

Route::get("/empleados/obtener/todos",[EmpleadoController::class, 'obtenerEmpleados'])->name('obtener.empleados');

Route::get("/empleado/crear",[EmpleadoController::class,'crearEmpleado'])->name('crear.empleado');

Route::post("empleado/guardar",[EmpleadoController::class, 'guardarEmpleado'])->name('guardar.empleado');

Route::get("/proveedores/obtener/todos",[ProveedorController::class, 'obtenerProveedores'])->name('obtener.Proveedores');

Route::get("/proveedor/crear",[ProveedorController::class,'crearProveedor'])->name('crear.proveedor');

Route::post("proveedor/guardar",[ProveedorController::class, 'guardarProveedor'])->name('guardar.proveedor');