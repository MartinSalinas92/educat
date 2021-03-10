<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    //use HasFactory;

    protected $fillable=[

        'name',
        'apellido',
        'dni',
        'cuil',
        'sexo',
        'fecha_nacimiento',
        'direccion',
        'religion',
        'telefono',
        'legajo',
        'uuid',
        'email',
        'password'

    ];


}
