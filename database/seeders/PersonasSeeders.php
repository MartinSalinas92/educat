<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PersonasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('personas')->insert([
            'name'=>'ramon',
            'apellido'=>'silguero',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1988-01-02',
            'direccion'=>'b liborsi cs15',
            'religion'=>'catolico',
            'telefono'=>'4425515',
            'legajo'=>'1122',
            'email'=>'ramonsilguero@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);
        DB::table('personas')->insert([
            'name'=>'Fabian',
            'apellido'=>'blanco',
            'dni'=> '20566218',
            'cuil'=> '2-30566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1999-02-02',
            'direccion'=>'b illia cs15',
            'religion'=>'catolico',
            'telefono'=>'4425515',
            'legajo'=>'1122',
            'email'=>'fabian@gmail.com',
            'password'=>Hash::make('123szdas78'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);
        DB::table('personas')->insert([
            'name'=>'Carolina',
            'apellido'=>'Lescano',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'mujer',
            'fecha_nacimiento'=>'1987-12-06',
            'direccion'=>'b independencia cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'carolinales@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Hugo',
            'apellido'=>'Gomez',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-12-06',
            'direccion'=>'b illia cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'hugogomez@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Gaspar',
            'apellido'=>'Mendoza',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-12-06',
            'direccion'=>'b independencia cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'gasparmendoza@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Roberto',
            'apellido'=>'Chico',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-05-06',
            'direccion'=>'b independencia cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'chico@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Cristian',
            'apellido'=>'Zarza',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-03-06',
            'direccion'=>'b incone cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'cristian@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Carolina',
            'apellido'=>'Lescano',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'mujer',
            'fecha_nacimiento'=>'1987-08-06',
            'direccion'=>'b independencia cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'carolinalesc@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]); DB::table('personas')->insert([
            'name'=>'Daniel',
            'apellido'=>'Fill',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-09-06',
            'direccion'=>'b independencia cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'daniel@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Juan',
            'apellido'=>'Gomez',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-07-06',
            'direccion'=>'b conosur cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'juangomez@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Roberto',
            'apellido'=>'Keneddy',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-04-06',
            'direccion'=>'b la floresta cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'robert@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Juan_Carlos',
            'apellido'=>'Pel',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-06-06',
            'direccion'=>'b obrero cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'juancarlos@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Armando',
            'apellido'=>'La_casa',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-04-06',
            'direccion'=>'b la nueva cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'armando@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Florencia',
            'apellido'=>'Manotas',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'mujer',
            'fecha_nacimiento'=>'1987-05-21',
            'direccion'=>'b la paz cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'florencia@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Gustavo',
            'apellido'=>'Cordera',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'hombre',
            'fecha_nacimiento'=>'1987-07-26',
            'direccion'=>'b independencia cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'giustavo@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);

        DB::table('personas')->insert([
            'name'=>'Norma',
            'apellido'=>'Sanchez',
            'dni'=> '20566218',
            'cuil'=> '2-20566218-9',
            'sexo'=>'mujer',
            'fecha_nacimiento'=>'1987-10-28',
            'direccion'=>'b venezuela cs15',
            'religion'=>'catolico',
            'telefono'=>'44253515',
            'legajo'=>'11222',
            'email'=>'marta@gmail.com',
            'password'=>Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


        ]);
    }
}
