<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\TipoHabitacionController;
use App\Http\Controllers\AcomodacionController;
use App\Http\Controllers\ReglaAcomodacionController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('hoteles', HotelController::class);
Route::apiResource('habitaciones', HabitacionController::class);
Route::apiResource('tipos-habitacion', TipoHabitacionController::class);
Route::apiResource('acomodaciones', AcomodacionController::class);
Route::apiResource('reglas-acomodacion', ReglaAcomodacionController::class);
Route::apiResource('roles', RolController::class);
Route::apiResource('usuarios', UserController::class);
