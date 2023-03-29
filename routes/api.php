<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post("/login",[AuthController::class,"login"]);
Route::apiResource("users",UserController::class)->middleware("auth:sanctum");
