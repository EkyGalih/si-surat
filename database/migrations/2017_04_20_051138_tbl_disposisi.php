<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblDisposisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_disposisi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surat_dari');
            $table->date('tgl_surat');
            $table->string('no_surat');
            $table->string('perihal');
            $table->date('tgl_terima');
            $table->string('diteruskan');
            $table->date('tgl_disposisi');
            $table->string('isi_disposisi');
            $table->string('file');
            $table->integer('smumum_id')->unsigned();
            $table->foreign('smumum_id')
                ->references('id')->on('tbl_smumum')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('smund_id')->unsigned();
            $table->foreign('smund_id')
                ->references('id')->on('tbl_smund')
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
        Schema::dropIfExists('tbl_disposisi');
    }
}
