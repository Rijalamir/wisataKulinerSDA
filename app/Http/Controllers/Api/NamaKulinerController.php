<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NamaKulinerResource;
use App\Models\Nama_Kuliner;
use App\Models\Kategori_Kuliner;
use App\Models\NamaTempat_Kuliner;
use Illuminate\Http\Request;

class NamaKulinerController extends Controller
{
    public function nama_kuliner()
    {
        $namakuliner = Nama_Kuliner::get();
        return NamaKulinerResource::collection($namakuliner);
    }

    public function nama_kulinerDetail(Nama_Kuliner $namakuliner)
    {
        $detail = Nama_Kuliner::where('id', $namakuliner->id)->first();
        return new NamaKulinerResource($detail);
       //$namakuliner = Nama_Kuliner::where('id', $namakuliner->id)->get();
       //return NamaKulinerResource::collection($namakuliner);
    }

    public function nama_kulinerKategori_Kuliner(Kategori_Kuliner $kategori)
    {
        $namakuliner = Nama_Kuliner::where('kategori__kuliners_id', $kategori->id)->get();

        return NamaKulinerResource::collection($namakuliner);
    }

    public function nama_kulinerNamaTempat_Kuliner(NamaTempat_Kuliner $namatempat)
    {
        $namakuliner = Nama_Kuliner::where('nama_tempat__kuliners_id', $namatempat->id)->get();

        return NamaKulinerResource::collection($namakuliner);
    }
}
