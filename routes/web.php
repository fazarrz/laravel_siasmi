<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UkmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->middleware('guest');
Route::get('/galeri', [HomeController::class, 'galery'])->middleware('guest');
Route::get('/berita', [HomeController::class, 'news_data'])->middleware('guest');
Route::get('/berita/{id}', [HomeController::class, 'news'])->middleware('guest');
Route::get('/profile/sejarah', [HomeController::class, 'profile_history'])->middleware('guest');
Route::get('/profile/visi_misi', [HomeController::class, 'visi_misi'])->middleware('guest');
Route::get('/profile/tenaga_pendidik', [HomeController::class, 'dosen'])->middleware('guest');
Route::get('/prestasi', [HomeController::class, 'grade'])->middleware('guest');
Route::get('/jurusan', [HomeController::class, 'studi'])->middleware('guest');
Route::get('/ukms', [HomeController::class, 'ukm'])->middleware('guest');
Route::get('/kontak', [HomeController::class, 'contact'])->middleware('guest');
Route::get('/daftar_mahasiswa', [HomeController::class, 'maba'])->middleware('guest');


Route::get('/admin', [LoginController::class, 'index'])->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::resource('/users', UserController::class)->middleware('auth');
Route::resource('/sections', SectionController::class)->middleware('auth');
Route::resource('/galeries', GaleryController::class)->middleware('auth');
Route::resource('/news', NewsController::class)->middleware('auth');
Route::resource('/ukm', UkmController::class)->middleware('auth');