<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    public $table = 'pasiens';
    protected $fillable = ['anamnese','pemerikasaan','diagnosa','catatan'];

    public function pasien(){
        return $this->belongsTo('App\Pasien');
    }
}
