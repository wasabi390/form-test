<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/register', [ContactController::class, 'confirm']);
Route::post('/login', [ContactController::class, 'confirm']);
Route::post('/admin', [ContactController::class, 'confirm']);
Route::post('/index', [ContactController::class, 'confirm']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);