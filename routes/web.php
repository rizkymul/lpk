<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posting', [App\Http\Controllers\ContentController::class, 'viewposting'])->name('posting');
Route::get('/persyaratan', [App\Http\Controllers\ContentController::class, 'viewpersyaratan'])->name('persyaratan');
Route::get('/kontak', [App\Http\Controllers\ContentController::class, 'viewkontak'])->name('kontak');
Route::get('/struktur', [App\Http\Controllers\ContentController::class, 'viewstruktur'])->name('struktur');
Route::get('/tentang', [App\Http\Controllers\ContentController::class, 'viewtentang'])->name('tentang');





Route::get('/', [App\Http\Controllers\ContentController::class, 'viewberanda'])->name('beranda');
Route::put('/content-update/{id}', [App\Http\Controllers\ContentController::class, 'contentUpdate'])->name('content.update');

Route::get('/content-edit/{id}', [App\Http\Controllers\ContentController::class, 'contentEdit'])->name('content.edit');