<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoTelpToNamaKulinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nama__kuliners', function (Blueprint $table) {
            $table->foreignID('no_telp', 255)->after('harga')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nama__kuliners', function (Blueprint $table) {
            $table->dropColumn('no_telp');
        });
    }
}
