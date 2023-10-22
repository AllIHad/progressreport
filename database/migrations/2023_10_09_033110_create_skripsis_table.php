<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skripsis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('dosen_id');
            $table->unsignedBigInteger('bab1_id');
            $table->unsignedBigInteger('bab2_id');
            $table->unsignedBigInteger('bab3_id');
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
        Schema::dropIfExists('skripsis');
    }
}
