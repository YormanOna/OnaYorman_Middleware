<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdadController;
use App\Http\Controllers\BebesController;
use App\Http\Controllers\NinosController;
use App\Http\Controllers\AdolescentesController;
use App\Http\Controllers\JovenesController;
use App\Http\Controllers\AdultosController;
use App\Http\Controllers\AdultosMayoresController;
use App\Http\Controllers\PersonasLongevasController;
use App\Http\Middleware\ClasificarEdad;

// 1) Formulario público
Route::get('/', [EdadController::class, 'mostrarFormulario'])
    ->name('formulario.edad');

// 2) POST para procesar edad (el middleware intercepta y redirige)
Route::post('/procesar-edad', [EdadController::class, 'procesarEdad'])
    ->name('procesar.edad')
    ->middleware(ClasificarEdad::class);

// 3) Error de edad inválida (público)
Route::view('/error-edad', 'edad.error')
    ->name('error.edad');

// 4) Rutas destino PROTEGIDAS por el mismo middleware
Route::middleware(ClasificarEdad::class)->group(function () {
    Route::get('/bebes', [BebesController::class, 'index'])
        ->name('bebes');

    Route::get('/ninos', [NinosController::class, 'index'])
        ->name('ninos');

    Route::get('/adolescentes', [AdolescentesController::class, 'index'])
        ->name('adolescentes');

    Route::get('/jovenes', [JovenesController::class, 'index'])
        ->name('jovenes');

    Route::get('/adultos', [AdultosController::class, 'index'])
        ->name('adultos');

    Route::get('/mayores', [AdultosMayoresController::class, 'index'])
        ->name('mayores');

    Route::get('/longevos', [PersonasLongevasController::class, 'index'])
        ->name('longevos');
});  
