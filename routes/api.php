<?php
use App\Http\Controllers\Api\KategoriKulinerController;
use App\Http\Controllers\Api\NamaKulinerController;
use App\Http\Controllers\Api\NamaTempatKulinerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/kategori_kuliner', [KategoriKulinerController::class, 'kategori_kuliner']);
Route::get('/namatempat_kuliner', [NamaTempatKulinerController::class, 'namatempat_kuliner']);
Route::get('nama_kuliner', [NamaKulinerController::class, 'nama_kuliner']);
Route::get('nama_kuliner/{namakuliner}', [NamaKulinerController::class, 'nama_kulinerDetail']);
Route::get('nama_kuliner/kategori_kuliner/{kategori}', [NamaKulinerController::class, 'nama_kulinerKategori_Kuliner']);
Route::get('nama_kuliner/namatempat_kuliner/{namatempat}', [NamaKulinerController::class, 'nama_kulinerNamaTempat_Kuliner']);