<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecializacionesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('especializacions')->insert([

            'nombre_especializacion'=>'operador de informatica',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),


        ]);
        DB::table('especializacions')->insert([

            'nombre_especializacion'=>'asistente_materno_infantil',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),


        ]);
        DB::table('especializacions')->insert([

            'nombre_especializacion'=>'peluquero',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),


        ]);
        DB::table('especializacions')->insert([

            'nombre_especializacion'=>'estetisista',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),


        ]);
        DB::table('especializacions')->insert([

            'nombre_especializacion'=>'soldador',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),


        ]);
    }
}
