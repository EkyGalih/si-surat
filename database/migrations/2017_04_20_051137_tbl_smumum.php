<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblSmumum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_smumum', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_terima');
            $table->string('asal_surat', 30);
            $table->date('tgl_surat');
            $table->string('kd_klasifikasi', 5);
            $table->string('no_surat', 30);
            $table->string('perihal', 100);
            $table->string('diteruskan', 250);
            $table->date('tgl_disposisi');
            $table->string('isi_disposisi', 100);
            $table->string('gambar', 50);
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
        Schema::drop('tbl_smumum');
    }
}
