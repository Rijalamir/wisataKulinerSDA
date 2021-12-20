<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Rijal Amirudin',
            'email' =>'rijal11059@gmail.com',
            'password' => bcrypt('rijalamir'),
        ]);
    }
}
