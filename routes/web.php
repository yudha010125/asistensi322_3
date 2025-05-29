<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

Route::get('/', [PendaftaranController::class, 'index']);
Route::post('/pendaftaran', [PendaftaranController::class, 'store']);
Route::get('/daftar-pendaftar', [PendaftaranController::class, 'list']);
