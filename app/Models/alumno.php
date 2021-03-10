<?php

namespace App\Models;

use App\Models\persona;
use App\Models\nivel_academico;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class alumno extends Model
{
    //use HasFactory;

    protected $fillable=[

        'personas_id',
        'nivel_academico_id'


    ];

    public function personas(){

       return $this->belongsTo(persona::class);
    }

    public function nivel_academico(){
        return $this->belongsTo(nivel_academico::class);
    }
}
