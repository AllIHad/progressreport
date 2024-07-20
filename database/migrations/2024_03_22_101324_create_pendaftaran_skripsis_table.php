<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_skripsis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konsentrasi_id');
            $table->foreignId('prodi_id');
            $table->string('nim');
            $table->string('judul');
            $table->string('pembimbing_nip');
            $table->string('status');
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
        Schema::dropIfExists('pendaftaran_skripsis');
    }
}
