<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{   
    // Deklarasi Model Soal = tabel soal pada database
    protected $table = 'soal';

    // Relationship antar tabel subtest dan soal
    // 1 Anggota tabel subtest 
    // dapat memiliki banyak anggota tabel soal
    public function subtest(){
        return $this->belongsTo('App\Subtest');  
    }

    public function jawaban(){
        return $this->hasOne('App\Jawaban');
    }
    public $timestamps = false;
}
