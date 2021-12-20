<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamaKulinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nama__kuliners', function (Blueprint $table) {
            $table->id();
            $table->foreignID('kategori__kuliners_nama')->nullable();;
            $table->foreignID('nama_tempat__kuliners_nama')->nullable();;
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->string('harga');
            $table->foreignID('no_telp')->nullable();;
            $table->timestamps();
        });
    }

    
}
