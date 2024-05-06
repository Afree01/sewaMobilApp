<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/','/mobil');

Route::get('/mobil', [App\Http\Controllers\MobilController::class, 'index'])->name('mobil');
Route::get('/addMobil', [App\Http\Controllers\MobilController::class, 'indexAdd'])->name('addMobil');
Route::post('/addMobil', [App\Http\Controllers\MobilController::class, 'store']);

Route::get('/listSewa', [App\Http\Controllers\PenyewaanController::class, 'index'])->name('listSewa');
Route::get('/addSewa', [App\Http\Controllers\PenyewaanController::class, 'indexAdd'])->name('addSewa');
Route::post('/addSewa', [App\Http\Controllers\PenyewaanController::class, 'store']);
