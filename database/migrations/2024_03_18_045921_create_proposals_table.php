<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->integer('bimbingan')->default(0);
            $table->integer('progress_report');
            $table->string('mahasiswa_nim');
            $table->string('mahasiswa_nama');
            $table->string('pembimbing_nip');
            $table->string('pembimbing_nama');
            $table->string('status')->default('Laporan Kemajuan diusulkan');
            $table->json('bab1')->nullable();
            $table->json('bab2')->nullable();
            $table->json('bab3')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('diskusi')->nullable();
            $table->string('komentar')->nullable();
            $table->string('naskah')->nullable();
            $table->date('tanggal');
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
        Schema::dropIfExists('proposals');
    }
}
