<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/visi-misi', [PageController::class, 'visiMisi'])->name('visi-misi');
Route::get('/sejarah', [PageController::class, 'sejarah'])->name('sejarah');
Route::get('/karakteristik', [PageController::class, 'karakteristik'])->name('karakteristik');
Route::get('/kegiatan', [PageController::class, 'kegiatan'])->name('kegiatan');
Route::get('/pendidikan', [PageController::class, 'pendidikan'])->name('pendidikan');
Route::get('/pojok-baca', [PageController::class, 'pojokBaca'])->name('pojok-baca');
Route::redirect('/interaktif', '/');


