<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->default('Progress Report Menggunakan Metode Mods');
            $table->string('progress_report');
            $table->string('status')->default('Usulan');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('dosen_id');
            $table->longText('bab1')->nullable();
            $table->longText('bab2')->nullable();
            $table->longText('bab3')->nullable();
            $table->longText('bab4')->nullable();
            $table->longText('bab5')->nullable();
            $table->json('comments')->nullable();
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
        Schema::dropIfExists('progress');
    }
}
