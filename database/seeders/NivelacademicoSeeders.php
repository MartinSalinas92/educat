<?php

namespace Database\Seeders;


use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelacademicoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nivel_academicos')->insert([
            'nivel'=>'primario_completo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);
        DB::table('nivel_academicos')->insert([
            'nivel'=>'secundario_completo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);
        DB::table('nivel_academicos')->insert([
            'nivel'=>'secundario incompleto',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);

    }
}
