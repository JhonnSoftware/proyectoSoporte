<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/SobreNosotros', function () {
    return view('SobreNosotros');
})->middleware(['auth', 'verified'])->name('SobreNosotros');

Route::get('/NuestrosServicios', function () {
    return view('NuestrosServicios');
})->middleware(['auth', 'verified'])->name('NuestrosServicios');

/*
Route::get('/Productos', function () {
    return view('Productos');
})->middleware(['auth', 'verified'])->name('Productos'); */

Route::get('/Productos', [EcommerceController::class, 'productos'])
    ->middleware(['auth', 'verified'])
    ->name('Productos');

Route::get('/Productos/{id}', [EcommerceController::class, 'detalleProducto'])
    ->middleware(['auth', 'verified'])
    ->name('DetalleProducto');

Route::post('/carrito/agregar', [EcommerceController::class, 'agregarAlCarrito'])
    ->middleware(['auth', 'verified'])
    ->name('carrito.agregar');
    
Route::get('/carrito', [EcommerceController::class, 'verCarrito'])
    ->middleware(['auth', 'verified'])
    ->name('carrito');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/Contactanos', [ContactanosController::class, 'index'])->name('Contactanos');
    Route::post('/Contactanos', [ContactanosController::class, 'store'])->name('Contactanos.store');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/Administracion', [AdministracionController::class, 'index'])->name('Administracion');
    Route::get('/listaTicket', [AdministracionController::class, 'listaTicket'])->name('Administracion.listaTicket');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::controller(ServiciosController::class)->group(function () {
        Route::get('/generarTicket', 'generarTicket')->name('servicios.generarTicket');
        Route::post('/generarTicket', 'store')->name('generarTicket.store');
    });

    Route::controller(UsuariosController::class)->group(function () {
        Route::get('/usuarios', 'index')->name('usuarios.index');
        Route::post('/usuarios', 'store')->name('usuarios.store');
    });

    Route::controller(ProductosController::class)->group(function () {
        Route::get('/productos', 'index')->name('productos.index');
        Route::post('/productos', 'store')->name('productos.store');
    });

    Route::controller(CategoriasController::class)->group(function () {
        Route::get('/categorias', 'index')->name('categorias.index');
        Route::post('/categorias', 'store')->name('categorias.store');
        Route::get('/categorias/eliminarCategoria/{id}', 'eliminarCategoria')->name('categorias.eliminar');
        Route::put('/categorias/{id}', 'update')->name('categorias.update'); // Ruta PUT para actualizar
    });
});


require __DIR__ . '/auth.php';
