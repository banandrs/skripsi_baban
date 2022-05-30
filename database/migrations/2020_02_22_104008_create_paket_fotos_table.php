<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketFotosTable extends Migration
{
    
    public function up()
    {
        Schema::create('paket_fotos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('paket');
            $table->string('paket_slug');
            $table->string('harga');
            $table->string('kapasitas');
            $table->string('durasi');
            $table->binary('background');
            $table->string('cetak_foto');
            $table->string('file_foto');
            $table->string('keterangan');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paket_fotos');
    }
}