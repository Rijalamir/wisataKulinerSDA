<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriKulinerController;
use App\Http\Controllers\NamaTempatKulinerController;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::get('/kategori', [KategoriKulinerController::class, 'index'])->name('kategori.index');


Route::get('/kategori/tambah', [KategoriKulinerController::class, 'tambah'])->name('kategori.tambah');

Route::post('/kategori/tambah', [KategoriKulinerController::class, 'store'])->name('kategori.store');

Route::get('/kategori/{kategoris}/edit', [KategoriKulinerController::class, 'edit'])->name('kategori.edit');

Route::put('/kategori/{kategoris}/edit', [KategoriKulinerController::class, 'update'])->name('kategori.update');

Route::delete('/kategori/{kategoris}/delete', [KategoriKulinerController::class, 'delete'])->name('kategori.delete');



Route::get('/namatempat', [NamaTempatKulinerController::class, 'index'])->name('namatempat.index');

Route::get('/namatempat/tambah', [NamaTempatKulinerController::class, 'tambah'])->name('namatempat.tambah');

Route::post('/namatempat/tambah', [NamaTempatKulinerController::class, 'store'])->name('namatempat.store');

Route::get('/namatempat/{namatempats}/edit', [NamaTempatKulinerController::class, 'edit'])->name('namatempat.edit');

Route::put('/namatempat/{namatempats}/edit', [NamaTempatKulinerController::class, 'update'])->name('namatempat.update');

Route::delete('/namatempat/{namatempats}/delete', [NamaTempatKulinerController::class, 'delete'])->name('namatempat.delete');


Route::get('/namakuliner', [App\Http\Controllers\NamaKulinerController::class, 'index'])->name('namakuliner.index');

Route::get('/namakuliner/tambah', [App\Http\Controllers\NamaKulinerController::class, 'tambah'])->name('namakuliner.tambah');

Route::post('/namakuliner/tambah', [App\Http\Controllers\NamaKulinerController::class, 'store'])->name('namakuliner.store');

Route::get('/namakuliner/{namakuliners}/edit', [App\Http\Controllers\NamaKulinerController::class, 'edit'])->name('namakuliner.edit');

Route::put('/namakuliner/{namakuliners}/edit', [App\Http\Controllers\NamaKulinerController::class, 'update'])->name('namakuliner.update');

Route::delete('/namakuliner/{namakuliners}/delete', [App\Http\Controllers\NamaKulinerController::class, 'delete'])->name('namakuliner.delete');

//Route::get('image/{images}', 'NamaKulinerController@displayImage')->name('image.displayImage');