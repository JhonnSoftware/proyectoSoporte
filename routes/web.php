<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\AdministracionController;
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

Route::get('/Productos', function (){
    return view('Productos');
})->middleware(['auth', 'verified'])->name('Productos');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/Contactanos', [ContactanosController::class, 'index'])->name('Contactanos');
    Route::post('/Contactanos', [ContactanosController::class, 'store'])->name('Contactanos.store');
});

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/Administracion', [AdministracionController::class, 'index'])->name('Administracion');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {

   Route::controller(ServiciosController::class)->group(function () {
        Route::get('generarTicket', 'generarTicket')->name('servicios.generarTicket');
   }); 

});


require __DIR__.'/auth.php';
