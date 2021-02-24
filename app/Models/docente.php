<?php

namespace App\Models;

use App\Models\persona;
use App\Models\Especializacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class docente extends Model
{
    //use HasFactory;


    protected $fillable=[
        'personas_id',
        'especializaciones_id'
    ];

    //Relacion con la tabla personas
    public function personas(){
        return $this->belongsTo(persona::class);
    }

    //relacion con la tabla especializacion
    public function especializacion(){
        return $this->belongsTo(Especializacion::class, 'especializaciones_id');
    }

}
