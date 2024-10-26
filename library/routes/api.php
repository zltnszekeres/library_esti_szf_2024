<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/book', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//User végpontok

Route:: get('/users',[UserController::class, 'index']);
Route:: get('/users/{id}',[UserController::class, 'show']);
Route:: post('/users',[UserController::class, 'store']);
Route:: put('/users/{id}',[UserController::class, 'update']);
Route:: delete('/users/{id}',[UserController::class, 'destroy']);

Route:: get('/books',[BookController::class, 'index']);
Route:: get('/books/{id}',[BookController::class, 'show']);
Route:: post('/books',[BookController::class, 'store']);
Route:: put('/books/{id}',[BookController::class, 'update']);
Route:: delete('/books/{id}',[BookController::class, 'destroy']);