<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;  // Pastikan ini menggunakan huruf kapital pada "C"
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoansController;

// Menggunakan apiResource untuk resource CRUD standar
Route::apiResource('categories', CategoryController::class);
Route::apiResource('books', BookController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('loans', LoansController::class);

// Route contoh untuk mengambil user yang sudah autentikasi menggunakan Sanctum
