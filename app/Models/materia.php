<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    //use HasFactory;

    protected $fillable=[
        'nombre_materia',
        'docente_id',
        'taller_id'
    ];



    public function docente(){
        return $this->belongsTo(persona::class);
    }
    public function taller(){
        return $this->belongsTo(taller::class);
    }



}
