<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerjalanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perjalanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('kendaraan_id');
            $table->string('lama_perjalanan');
            $table->string('tempat_berangkat')->default('Samarinda');
            $table->string('tempat_tujuan');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_kembali');
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
        Schema::dropIfExists('perjalanans');
    }
}
