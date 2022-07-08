<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('promos');
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('pekerjaan', ['Siswa', 'Mahasiswa', 'Wiraswasta', 'ASN']);
            $table->string('nama_promo');
            // $table->string('harga');
            $table->string('gambar');
            $table->string('keterangan');
            $table->dateTime('send_at')->nullable();
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
        //
    }
}
