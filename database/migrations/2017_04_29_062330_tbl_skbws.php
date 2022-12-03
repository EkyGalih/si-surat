<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblSkbws extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_skbws', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_bagian');
            $table->date('tgl_surat');
            $table->string('kd_klasifikasi');
            $table->string('no_surat');
            $table->string('perihal');
            $table->integer('filesk_id')->unsigned();
            $table->foreign('filesk_id')
                ->references('id')->on('tbl_filesk')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('tbl_skbws');
    }
}
