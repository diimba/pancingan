<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmpRekomendasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmp_rekomendasi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id'); // foreign key tabel users
            $table->unsignedInteger('jurusan_id'); // foreign key tabel jurusan
            //$table->timestamps();
            // foreign('nama kolom fk pada tabel ini')
            // references('kolom referensi dari tabel acuan')
            // on('nama tabel acuan')
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('jurusan_id')->references('id')->on('jurusan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmp_rekomendasi');
    }
}
