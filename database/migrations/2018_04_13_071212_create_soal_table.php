<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nomor');
            $table->unsignedInteger('subtest_id');            
            $table->text('teks')->nullable();
            $table->text('gambar')->nullable();
            $table->string('kunci');
            $table->text('jwb_a_teks')->nullable();
            $table->text('jwb_a_img')->nullable();
            $table->text('jwb_b_teks')->nullable();
            $table->text('jwb_b_img')->nullable();
            $table->text('jwb_c_teks')->nullable();
            $table->text('jwb_c_img')->nullable();
            $table->text('jwb_d_teks')->nullable();
            $table->text('jwb_d_img')->nullable();
            $table->text('jwb_e_teks')->nullable();
            $table->text('jwb_e_img')->nullable();
            $table->text('jwb_manual')->nullable();
            //$table->timestamps();
            $table->foreign('subtest_id')->references('id')->on('subtest');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal');
    }
}
