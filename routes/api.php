<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;



Route::get("/hi", [testController::class, 'sayHi']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
