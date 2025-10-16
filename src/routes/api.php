<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');
// Agregar el controlador EventoController
use App\Http\Controllers\EventoController;
// Agregar el controlador PonenteController
use App\Http\Controllers\PonentesController;
// Agregar el controlador AsistenteController
use App\Http\Controllers\AsistentesController;
/**
* Rutas públicas
*/
/**
* Rutas para el recurso Evento.
*/
// Recuperar todos los eventos
Route::get('/eventos', [EventoController::class, 'index']);
// Recuperar un evento específico
Route::get('/eventos/{id}', [EventoController::class, 'show']);
// Rutas para Ponentes
Route::get('/ponentes', [PonentesController::class, 'index']);
Route::get('/ponentes/{id}', [PonentesController::class, 'show']);
/**
* Rutas privadas
*/
Route::middleware('auth:api')->group(function () {
/**
* Rutas para el recurso Evento.
*/
// Almacenar un evento nuevo
Route::post('/eventos', [EventoController::class, 'store']);
// Actualizar un evento específico
Route::put('/eventos/{id}', [EventoController::class, 'update']);
// Eliminar un evento específico
Route::delete('/eventos/{id}', [EventoController::class, 'destroy']);

// Rutas para Ponentes

Route::post('/ponentes', [PonentesController::class, 'store']);
Route::put('/ponentes/{id}', [PonentesController::class, 'update']);
Route::delete('/ponentes/{id}', [PonentesController::class, 'destroy']);

// Rutas para Asistentes
Route::get('/asistentes', [AsistentesController::class, 'index']);
Route::post('/asistentes', [AsistentesController::class, 'store']);
Route::get('/asistentes/{id}', [AsistentesController::class, 'show']);
Route::put('/asistentes/{id}', [AsistentesController::class, 'update']);
Route::delete('/asistentes/{id}', [AsistentesController::class, 'destroy']);

});