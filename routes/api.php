<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/suma/{a}/{b}', function ($a, $b) {
    return response()->json(['resultado' => $a + $b]);
});

Route::get('/mult/{a}/{b}', function ($a, $b) {
    return response()->json(['resultado' => $a * $b]);
});