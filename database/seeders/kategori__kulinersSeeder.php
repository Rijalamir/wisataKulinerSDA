<?php

namespace Database\Seeders;

use App\Models\Kategori_Kuliner;
use Illuminate\Database\Seeder;

class kategori__kulinersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori_Kuliner::create([
            'nama' => 'Traditional Food',
        ]);

        Kategori_Kuliner::create([
            'nama' => 'Indonesian Food',
        ]);

        Kategori_Kuliner::create([
            'nama' => 'Chinese Food',
        ]);

        Kategori_Kuliner::create([
            'nama' => 'Japanese Food',
        ]);

        Kategori_Kuliner::create([
            'nama' => 'Western Food',
        ]);

        Kategori_Kuliner::create([
            'nama' => 'Sea Food',
        ]);
    }
}
