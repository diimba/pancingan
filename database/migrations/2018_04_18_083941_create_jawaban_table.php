<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('soal_id');
            $table->unsignedInteger('subtest_id');
            $table->char('jawab', 1);
            //$table->timestamps();
            // foreign('nama kolom fk pada tabel ini')
            // references('kolom referensi dari tabel acuan')
            // on('nama tabel acuan')
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('soal_id')->references('id')->on('soal');
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
        Schema::dropIfExists('jawaban');
    }
}
