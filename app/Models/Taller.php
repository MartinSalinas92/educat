<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    //use HasFactory;

    protected $fillable=[

        'nombre_taller',
        'año_cursado',
        'año_lectivo'


    ];
}
