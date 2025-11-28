<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\DoorAccessController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, "login"])->name("login.store");

Route::get('/login', fn () => "Hola")->name("login");

Route::get("/borrar", function(){
    return response()->json(["data" => User::find(1)->delete()]);
})->middleware("auth:sanctum");

Route::get("/campus", [CampusController::class, "index"]);
Route::get("/puertas-acceso/{campus}", [DoorAccessController::class, "index"]);