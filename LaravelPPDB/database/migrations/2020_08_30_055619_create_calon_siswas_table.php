<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('noppdb');
            $table->string('nama');
            $table->string('asal_sekolah');
            $table->string('pilihan1');
            $table->string('pilihan2');
            $table->string('alamat');
            $table->string('nohp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calon_siswas');
    }
}
