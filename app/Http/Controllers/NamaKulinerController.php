<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Nama_Kuliner;
use App\Models\Kategori_Kuliner;
use App\Models\NamaTempat_Kuliner;
use Storage;

class NamaKulinerController extends Controller
{
    public function index(Nama_Kuliner $namakuliners)
    {
        $namakuliner = Nama_Kuliner::get();
        return view('namakuliner.index', compact('namakuliner'));
        $images = public_path('storage').'images/deskripsi/'. $namakuliners;
        //public_path('storage') => storage_path('app/public')
    }

    public function tambah()
    {
        $kategori = Kategori_Kuliner::get();
        $namatempat = NamaTempat_Kuliner::get();
        return view('namakuliner.tambah', compact('kategori', 'namatempat'));
    }

    public function store(Request $request, Nama_Kuliner $namakuliners)
    {
        $this->validate($request, [
            'name' => 'required',
            'kategori' => 'not_in:0',
            'namatempat' => 'not_in:0',
            'deskripsi' => 'required',
            'images' => 'required|image|mimes:jpg,png,jpeg',
            'harga' => 'required',
        ]);

    $images = $request->file('images')->store('deskripsi' /**$request->images**/);
        //$images = public_path('images').'images/deskripsi/'. $namakuliners;
        //Storage::disk('local')->put('/images/deskripsi/' . $namakuliners );
        //$images = Storage::putFileAs(
        //    'images', $request->file('images') 
        //);
        $namakuliner = Nama_Kuliner::create([
            'nama' => $request->name,
            'kategori__kuliners_id' => $request->kategori,
            'nama_tempat__kuliners_id' => $request->namatempat,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->images,
            'harga' => $request->harga
        ]);

        

        return redirect()->route('namakuliner.index');
    }

    public function edit(Nama_Kuliner $namakuliners)
    {
        $kategori = Kategori_Kuliner::get();
        $namatempat = NamaTempat_Kuliner::get();
        return view('namakuliner.edit', compact('namakuliners','kategori', 'namatempat'));
    }

    public function update(Request $request, Nama_Kuliner $namakuliners)
    {
        $this->validate($request, [
            'name' => 'required',
            'kategori' => 'not_in:0',
            'namatempat' => 'not_in:0',
            'deskripsi' => 'required',
            
            'harga' => 'required',
        ]);
        if ($request->hasFile('images')) {
            $this->validate($request, [
                'images' => 'required|image|mimes:jpg,png,jpeg',
            ]);
        }

        $images = $namakuliners->images;
        if ($request->hasFile('images')) {
            if ($namakuliners->images) {
                Storage::delete($namakuliners->images);
            }
            $images = $request->file('images')->store('deskripsi' /**$request->images**/);
            //$images = public_path('images').'images/deskripsi/'. $namakuliners;
            //Storage::disk('local')->put('/images/deskripsi/' . $namakuliners );
            //$images = Storage::putFileAs(
            //    'images', $request->file('images') 
            //);
        }

        $namakuliners->update([

            'nama' => $request->name,
            'kategori__kuliners_id' => $request->kategori,
            'nama_tempat__kuliners_id' => $request->namatempat,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->images,
            'harga' => $request->harga
        ]);

        return redirect()->route('namakuliner.index');
    }

    public function delete(Nama_Kuliner $namakuliners)
    {
        $namakuliners->delete();
        if ($namakuliners->images) {
            Storage::delete($namakuliners->images);
        }
        return redirect()->route('namakuliner.index');
    }
    
}
