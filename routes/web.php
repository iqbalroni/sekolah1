<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BeritaController;

Route::get('/',[IndexController::class,'index'])->name('frontend');
Route::post('/contact/simpan',[IndexController::class,'contact']);
Route::get('/komentar',[IndexController::class,'komen']);
Route::post('/komentar/simpan',[IndexController::class,'save']);
Route::get('/terkini',[IndexController::class,'terkini']);
Route::get('/terkini/{judul}',[IndexController::class,'ShowBerita']);




Route::get('/spanduk',[BannerController::class,'index'])->name('homebanner');
Route::get('/spanduk/tambah',[BannerController::class,'add']);
Route::get('/spanduk/hapus/{id}',[BannerController::class,'delete']);
Route::get('/spanduk/edit/{id}',[BannerController::class,'edit']);
Route::get('/spanduk/aktif/{id}',[BannerController::class,'on']);
Route::get('/spanduk/nonaktif/{id}',[BannerController::class,'off']);
Route::post('/spanduk/simpan',[BannerController::class,'save']);
Route::post('/spanduk/simpanedit/{id}',[BannerController::class,'update']);
Auth::routes();

Route::get('/testimoni',[KomentarController::class,'index'])->name('testimoni');
Route::get('/testimoni/hapus/{id}',[KomentarController::class,'delete']);
Route::get('/testimoni/aktif/{id}',[KomentarController::class,'on']);
Route::get('/testimoni/nonaktif/{id}',[KomentarController::class,'off']);
Route::get('/testimoni/edit/{id}',[KomentarController::class,'edit']);
Route::post('/testimoni/simpanedit/{id}',[KomentarController::class,'update']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/video',[VideoController::class, 'index'])->name('video');
Route::get('/video/edit/{id}',[VideoController::class, 'edit']);
Route::post('/video/simpanedit/{id}',[VideoController::class, 'update']);

Route::get('/subdomain',[DomainController::class, 'index'])->name('domain');
Route::get('/subdomain/tambah',[DomainController::class, 'add']);
Route::post('/subdomain/simpan',[DomainController::class, 'save']);
Route::get('/subdomain/hapus/{id}',[DomainController::class, 'delete']);
Route::get('/subdomain/edit/{id}',[DomainController::class, 'edit']);
Route::post('/subdomain/simpanedit/{id}',[DomainController::class, 'update']);

Route::get('/agenda',[AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda/tambah',[AgendaController::class, 'add']);
Route::post('/agenda/simpan',[AgendaController::class, 'save']);
Route::get('/agenda/hapus/{id}',[AgendaController::class, 'delete']);
Route::get('/agenda/edit/{id}',[AgendaController::class, 'edit']);
Route::post('/agenda/simpanedit/{id}',[AgendaController::class, 'update']);

Route::get('/pengguna',[PenggunaController::class,'index'])->name('pengguna');
Route::get('/pengguna/tambah',[PenggunaController::class, 'add']);
Route::post('/pengguna/simpan',[PenggunaController::class, 'save']);
Route::get('/pengguna/hapus/{id}',[PenggunaController::class, 'delete']);
Route::get('/pengguna/edit/{id}',[PenggunaController::class, 'edit']);
Route::post('/pengguna/simpanedit/{id}',[PenggunaController::class, 'update']);

Route::get('/support',[BrandController::class,'index'])->name('support');
Route::get('/support/tambah',[BrandController::class, 'add']);
Route::post('/support/simpan',[BrandController::class, 'save']);
Route::get('/support/hapus/{id}',[BrandController::class, 'delete']);
Route::get('/support/edit/{id}',[BrandController::class, 'edit']);
Route::post('/support/simpanedit/{id}',[BrandController::class, 'update']);

Route::get('/kontak',[ContactController::class,'index'])->name('kontak');
Route::get('/kontak/hapus/{id}',[ContactController::class, 'delete']);

Route::get('/berita',[BeritaController::class,'index'])->name('berita');
Route::get('/berita/tambah',[BeritaController::class,'add']);
Route::post('/berita/simpan',[BeritaController::class, 'save']);
Route::get('/berita/edit/{id}',[BeritaController::class, 'edit']);
Route::post('/berita/simpanedit/{id}',[BeritaController::class, 'update']);
Route::get('/berita/hapus/{id}',[BeritaController::class, 'delete']);