<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');



// Agregar el controlador EventoController
use App\Http\Controllers\EventoController;
// Agregar el controlador PonenteController
use App\Http\Controllers\PonenteController;
// Agregar el controlador AsistenteController
use App\Http\Controllers\AsistenteController;
/**
* Rutas para el recurso Evento.
*/
// Recuperar todos los eventos
Route::get('/eventos', [EventoController::class, 'index']);
// Almacenar un evento nuevo
Route::post('/eventos', [EventoController::class, 'store']);
// Recuperar un evento específico
Route::get('/eventos/{id}', [EventoController::class, 'show']);
// Actualizar un evento específico
Route::put('/eventos/{id}', [EventoController::class, 'update']);
// Eliminar un evento específico
Route::delete('/eventos/{id}', [EventoController::class, 'destroy']);

// Rutas para Ponentes
Route::get('/ponentes', [PonenteController::class, 'index']);
Route::post('/ponentes', [PonenteController::class, 'store']);
Route::get('/ponentes/{id}', [PonenteController::class, 'show']);
Route::put('/ponentes/{id}', [PonenteController::class, 'update']);
Route::delete('/ponentes/{id}', [PonenteController::class, 'destroy']);

// Rutas para Asistentes
Route::get('/asistentes', [AsistenteController::class, 'index']);
Route::post('/asistentes', [AsistenteController::class, 'store']);
Route::get('/asistentes/{id}', [AsistenteController::class, 'show']);
Route::put('/asistentes/{id}', [AsistenteController::class, 'update']);
Route::delete('/asistentes/{id}', [AsistenteController::class, 'destroy']);
