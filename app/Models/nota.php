<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    //use HasFactory;

    protected $fillable=[

        'notas1',
        'notas2',
        'notas3',
        'notas4',
        'promedio',
        'estado',
        'alumno_id',
        'docente_id',
        'taller_id',
        'materia_id',

    ];

    public function alumno(){
        return $this->belongsTo(persona::class);
    }

    public function docente(){
        return $this->belongsTo(persona::class);
    }

    public function taller(){
        return $this->belongsTo(taller::class);
    }
    public function materia(){
        return $this->belongsTo(materia::class);
    }
}
