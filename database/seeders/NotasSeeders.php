<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('notas')->insert([

                'notas1'=>'4',
                'notas2'=>'8',
                'notas3'=>'6',
                'notas4'=>'8',
                'promedio'=>'7',
                'estado'=>'Regular',
                'alumno_id'=>'1',
                'docente_id'=>'2',
                'taller_id'=>'1',
                'materia_id'=>'2',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()



        ]);
    }
}
