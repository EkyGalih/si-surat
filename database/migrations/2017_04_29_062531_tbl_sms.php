<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblSms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_sms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_pengirim');
            $table->string('no_tujuan');
            $table->string('isi_pesan');
            $table->boolean('sudah_baca')->default(false);
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
        Schema::dropIfExists('tbl_sms');
    }
}
