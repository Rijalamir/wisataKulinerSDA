<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_Kuliner;

class KategoriKulinerController extends Controller
{
    public function index()
    {
        $kategori = Kategori_Kuliner::get();
        return view('kategori.index', compact('kategori'));
    }

    public function tambah()
    {
        return view('kategori.tambah');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required'
            ],
            [
                'name.required' => 'Nama Kategori Harus Di Isi',
            ]
        );

        Kategori_Kuliner::create([
            'nama' => $request->name,
        ]);

        return redirect()->route('kategori.index');
    }

    public function edit(Kategori_Kuliner $kategoris)
    {
        return view('kategori.edit', compact('kategoris'));
    }

    public function update(Request $request, Kategori_Kuliner $kategoris)
    {
        $this->validate(
            $request,
            [
                'name' => 'required'
            ],
            [
                'name.required' => 'Nama Kategori Harus Di Isi',
            ]
        );

        $kategoris->update([
            'nama' => $request->name,
        ]);

        return redirect()->route('kategori.index');
    }

    public function delete(Kategori_Kuliner $kategoris)
    {
        $kategoris->delete();
        return redirect()->route('kategori.index');
    }
}
