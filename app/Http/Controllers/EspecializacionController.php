<?php

namespace App\Http\Controllers;

use App\Models\Especializacion;
use Illuminate\Http\Request;

class EspecializacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $especializaciones= Especializacion::all();

        return view('especificaciones.index', compact('especializaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('especificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $data=$request->validate([
            'nombre_especialidad'=>'required'
        ]);

        $especialidad=Especializacion::create([
            'nombre_especializacion'=>$data['nombre_especialidad']

        ]);

        return back()->with('estado', 'la especialidad se ha guardado correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especializacion  $especializacion
     * @return \Illuminate\Http\Response
     */
    public function show(Especializacion $especializacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especializacion  $especializacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Especializacion $especializacion)
    {
        //
        return view('especificaciones.edit', compact('especializacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especializacion  $especializacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especializacion $especializacion, $id)
    {
        //


        $data=$request->validate([
            'nombre_especialidad'=>'required'
        ]);

        $especialidad= Especializacion::find($id);
        $especialidad->nombre_especializacion=$data['nombre_especialidad'];
        $especialidad->save();

        return back()->with('estado', 'se ha modificado la especializacion');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especializacion  $especializacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especializacion $especializacion)
    {
        //
        $especializacion->delete();

        return response()->json(['mensaje'=>'se ha eliminado la especialidad']);
    }
}
