<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use App\Models\Taller;
use App\Models\docente;
use App\Models\materia;
use App\Models\persona;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $materia=materia::all();

        return view('materias.index', compact('materia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personas=persona::all();
        $docente=docente::all();
        $taller=Taller::all();


        return view('materias.create', compact( 'docente', 'taller', 'personas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $data=$request->validate([

            'nombre_materia' => 'required',
            'docente'=>'required',
            'taller'=>'required'

        ]);

        $materia= materia::create([

            'nombre_materia'=>$data['nombre_materia'],
            'docente_id'=>$data['docente'],
            'taller_id'=>$data['taller'],

        ]);

        return back()->with('estado', 'La materia ha sido creada correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(materia $materia)
    {
        //

           //
           $personas=persona::all();
           $docente=docente::all();
           $taller=Taller::all();

        return view('materias.edit', compact('materia', 'personas', 'docente', 'taller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materia $materia, $id)
    {
        // return $request;



        $data=$request->validate([

            'nombre_materia' => 'required',
            'docente'=>'required',
            'taller'=>'required'

        ]);

        $tarea=[
            'nombre_materia'=>$data['nombre_materia'],
            'docente_id'=>$data['docente'],
            'taller_id'=>$data['taller']
        ];

        materia::where('id',$id)->update($tarea);


        return back()->with('estado', 'se ha modificado correctamente');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(materia $materia)
    {
        //

        $materia->delete();

        return response()->json(['mensaje'=>'la materia se ha borrado correctamente']);
    }
}
