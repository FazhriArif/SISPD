<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('pegawai_id');
            $table->foreignId('perjalanan_id');
            $table->foreignId('status_id');
            $table->string('nomor');
            $table->string('uraian');
            $table->timestamps();

            $table->boolean('unread_notification')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }

}
