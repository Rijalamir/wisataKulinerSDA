<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KategoriKulinerResource;
use App\Models\Kategori_Kuliner;
use Illuminate\Http\Request;

class KategoriKulinerController extends Controller
{
    public function kategori_kuliner()
    {
        $kategori = Kategori_Kuliner::get();
        return KategoriKulinerResource::collection($kategori);
    }
}
