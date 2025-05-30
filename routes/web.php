<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\LandingPage\LandingpageController::class, 'index'])->name('index');

Route::get('/sejarah', [App\Http\Controllers\Sejarah\SejarahController::class, 'index'])->name('sejarah');

Route::get('/visimisi', [App\Http\Controllers\Visimisi\VisimisiController::class, 'index'])->name('visimisi');

Route::get('/sambutan', [App\Http\Controllers\Sambutan\SambutanController::class, 'index'])->name('sambutan');

Route::get('/berita/{slug}', [App\Http\Controllers\News\NewsController::class, 'show'])->name('berita.show');
