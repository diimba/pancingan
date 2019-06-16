<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $table = 'hasil';
    
    public $timestamps = false;

    public function r_user(){
        return $this->belongsTo('App\User');
    }
}
