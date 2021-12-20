<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NamaTempatKulinerResource;
use App\Models\NamaTempat_Kuliner;
use Illuminate\Http\Request;

class NamaTempatKulinerController extends Controller
{
    public function namatempat_kuliner()
    {
        $namatempat = NamaTempat_Kuliner::get();
        return NamaTempatKulinerResource::collection($namatempat);
    }
}
