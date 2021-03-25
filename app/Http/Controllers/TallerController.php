<?php

namespace App\Http\Controllers;

use App\Models\Taller;
use Illuminate\Http\Request;

class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $talleres=Taller::all();
        return view('talleres.index', compact('talleres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('talleres.create');
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
        //return $request;

        $data=$request->validate([

            'nombre_taller'=>'required|max:50',
            'año_cursado'=>'required',
            'año_lectivo'=>'required',


        ]);


        $taller= Taller::create([

            'nombre_taller'=>$data['nombre_taller'],
            'año_cursado'=>$data['año_cursado'],
            'año_lectivo'=>$data['año_lectivo']
        ]);

        return back()->with('estado', 'La informacion del taller ha sido almacenada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function show(Taller $taller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function edit(Taller $taller)
    {

            return view('talleres.edit', compact('taller'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taller $taller, $id)
    {


        $data=$request->validate([

            'nombre_taller'=>'required',
            'año_cursado'=>'required',
            'año_lectivo'=>'required',

        ]);

        $taller=Taller::find($id);
        $taller->nombre_taller=$data['nombre_taller'];
        $taller->año_cursado=$data['año_cursado'];
        $taller->año_lectivo=$data['año_lectivo'];
        $taller->save();


        return back()->with('estado', 'se ha modificado correctamente');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taller $taller)
    {
        //
        $taller->delete();

        return response()->json(['mensaje'=>'se ha eliminado el taller', $taller->nombre_taller]);
    }
}
