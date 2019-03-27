<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public $table = 'pasiens';
    protected $fillable = ['nama','alamat','tglLahir','file'];

    public function RekamMediss(){
        return $this->hasMany('App\RekamMedis');
    }
}
