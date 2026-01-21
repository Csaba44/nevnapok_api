<?php

use App\Http\Controllers\NevnapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/nevnapok", [NevnapController::class, 'index']);
