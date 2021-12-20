<?php

namespace Database\Seeders;

use App\Models\NamaTempat_Kuliner;
use Illuminate\Database\Seeder;

class nama_tempat__kulinersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NamaTempat_Kuliner::create([
            'nama' => 'Wong Solo',
        ]);

        NamaTempat_Kuliner::create([
            'nama' => 'Gacoan',
        ]);

        NamaTempat_Kuliner::create([
            'nama' => 'Mie Seten',
        ]);

        
    }
}
