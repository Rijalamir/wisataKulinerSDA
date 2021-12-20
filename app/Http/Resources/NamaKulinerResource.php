<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NamaKulinerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'kategori__kuliners_nama' => $this->kategori->nama,
            'nama_tempat__kuliners_nama' => $this->namatempat->nama,            
            'deskripsi' => $this->deskripsi,
            'gambar' => $this->getImage(),
            'harga' => $this->harga,
        ];
        if(is_null($this->id)){
            return "-";
        }
    }
}
