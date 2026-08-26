<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profil', [PageController::class, 'about'])->name('about');
Route::redirect('/about', '/profil');
Route::get('/guru', [PageController::class, 'teachers'])->name('teachers');
Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');
Route::get('/berita', [PageController::class, 'news'])->name('news');
Route::get('/berita/{slug}', [PageController::class, 'newsDetail'])->name('news.detail');
Route::get('/program/{slug}', [PageController::class, 'programDetail'])->name('program.detail');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

Route::post('/pengaduan', [PageController::class, 'submitPengaduan'])->name('pengaduan.submit');
