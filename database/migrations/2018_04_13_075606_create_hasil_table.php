<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id'); // foreign key tabel users
            $table->unsignedInteger('subtest_id'); // foreign key tabel subtest
            $table->integer('hasil')->default(0);
            $table->string('keterangan');
            //$table->timestamps();
            // foreign('nama kolom fk pada tabel ini')
            // references('kolom referensi dari tabel acuan')
            // on('nama tabel acuan')
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('hasil');
    }
}
