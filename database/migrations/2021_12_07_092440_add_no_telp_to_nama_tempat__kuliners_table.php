<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoTelpToNamaTempatKulinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nama_tempat__kuliners', function (Blueprint $table) {
            $table->string('no_telp', 255)->after('alamat')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nama_tempat__kuliners', function (Blueprint $table) {
            $table->dropColumn('no_telp');
        });
    }
}
