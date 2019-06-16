<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtest extends Model
{
    protected $table = 'subtest';

    // Relationship antar tabel subtest dan soal
    // 1 anggota tabel subtest 
    // dapat memiliki banyak anggota tabel soal
    public function soals(){
        return $this->hasMany('App\Soal');
    }
    public $timestamps = false;
}
