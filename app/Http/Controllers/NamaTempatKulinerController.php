<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaTempat_Kuliner;

class NamaTempatKulinerController extends Controller
{
    public function index()
    {
        $namatempat = NamaTempat_Kuliner::get();
        return view('namatempat.index', compact('namatempat'));
    }

    public function tambah()
    {
        return view('namatempat.tambah');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'address' => 'required',
                'telp',
            ],
            [
                'name.required' => 'Nama Tempat Kuliner Harus Di Isi',
                'address.required' => 'Alamat Tempat Kuliner Harus Di Isi',
                'telp',
            ]
        );

        NamaTempat_Kuliner::create([
            'nama' => $request->name,
            'alamat' => $request->address,
            'no_telp' => $request->telp,
        ]);

        return redirect()->route('namatempat.index');
    }

    public function edit(NamaTempat_Kuliner $namatempats)
    {
        return view('namatempat.edit', compact('namatempats'));
    }

    public function update(Request $request, NamaTempat_Kuliner $namatempats)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'address' => 'required',
                'telp',
            ],
            [
                'name.required' => 'Nama Tempat Kuliner Harus Di Isi',
                'address.required' => 'Alamat Tempat Kuliner Harus Di Isi',
                'telp',
            ]
        );

        $namatempats->update([
            'nama' => $request->name,
            'alamat' => $request->address,
            'no_telp' => $request->telp,
        ]);

        return redirect()->route('namatempat.index');
    }

    public function delete(NamaTempat_Kuliner $namatempats)
    {
        $namatempats->delete();
        return redirect()->route('namatempat.index');
    }
}