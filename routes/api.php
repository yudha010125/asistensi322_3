<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PendaftarController;

Route::get('/pendaftars', [PendaftarController::class, 'index']);
Route::post('/pendaftars', [PendaftarController::class, 'store']);
