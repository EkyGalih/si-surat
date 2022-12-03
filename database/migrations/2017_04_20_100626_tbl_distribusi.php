<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblDistribusi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_distribusi', function (Blueprint $table){
            $table->increments('id');
            // $table->string('tujuan', 100);
            $table->string('file_disposisi');
            $table->string('file_surat');
            $table->integer('disposisi_id')->unsigned();
            $table->integer('smumum_id')->unsigned();
            $table->foreign('disposisi_id')
                ->references('id')->on('tbl_disposisi')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('smumum_id')
                ->references('id')->on('tbl_smumum')
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
        Schema::drop('tbl_distribusi');
    }
}
