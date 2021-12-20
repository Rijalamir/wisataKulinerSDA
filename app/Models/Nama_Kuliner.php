<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nama_Kuliner extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori_Kuliner', 'kategori__kuliners_id');
    }

    public function namatempat()
    {
        return $this->belongsTo('App\Models\NamaTempat_Kuliner', 'nama_tempat__kuliners_id');
    }

    public function getImage()
    {
        
        return asset('images/deskripsi/' . $this->gambar);
    }
}
