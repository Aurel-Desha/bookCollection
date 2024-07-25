<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

Route::get('/bookCollection', [bookController::class, 'index']);
Route::get('/bookCollection/create', [bookController::class, 'create']);
Route::post('/', [bookController::class, 'store']);
Route::post('/bookCollection', [bookController::class, 'show']);
Route::get('/bookCollection/detail/{titre}', [bookController::class, 'detail'])->name('detail');
