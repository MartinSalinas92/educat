<?php

namespace App\Http\Controllers;

use App\Models\docente;
use App\Models\persona;
use Illuminate\Http\Request;
use App\Models\Especializacion;
use Illuminate\Support\Facades\DB;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $personas=persona::all();

        $especializacion=Especializacion::all();

        $docente=docente::all();




        return view('docentes.index', compact('personas','especializacion','docente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $especializacion=Especializacion::all();

        return view('docentes.create',compact('especializacion'));
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

        $date=$request->validate([

            'name'=>'required|max:50',
            'apellido'=>'required|max:15',
            'dni'=>'required|max:8',
            'cuil'=>'required|max:15',
            'sexo'=>'required',
            'fecha_nacimiento'=>'required',
            'direccion'=>'required',
            'religion'=>'required',
            'telefono'=>'required',
            'legajo'=>'required',
            'email'=>'required',
            'password'=>'required',
            'especializacion'=>'required'


        ]);

        $personas=persona::create([

            'name'=>$date['name'],
            'apellido'=>$date['apellido'],
            'dni'=>$date['dni'],
            'cuil'=>$date['cuil'],
            'sexo'=>$date['sexo'],
            'fecha_nacimiento'=>$date['fecha_nacimiento'],
            'direccion'=>$date['direccion'],
            'religion'=>$date['religion'],
            'telefono'=>$date['telefono'],
            'legajo'=>$date['legajo'],
            'email'=>$date['email'],
            'password'=>bcrypt($date['password']),

        ]);



        $docente=docente::create([
           'personas_id'=> $personas->id,
           'especializaciones_id'=> $date['especializacion']

        ]);

        return back()->with('estado','tu informacion ha sido guardada correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(docente $docente)
    {
        //
        $personas=persona::all();
        $especialidad=Especializacion::all();


        return view('docentes.edit', compact('especialidad','personas','docente' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, docente $docente, $id)
    {




        //validacion

        $date=$request->validate([

            'name'=>'required|max:50',
            'apellido'=>'required|max:15',
            'dni'=>'required|max:8',
            'cuil'=>'required|max:15',
            'sexo'=>'required',
            'fecha_nacimiento'=>'required',
            'direccion'=>'required',
            'religion'=>'required',
            'telefono'=>'required',
            'legajo'=>'required',
            'email'=>'required',
            'password'=>'required',
            'especializacion'=>'required'

        ]);




            $personas=persona::find($id);
            $personas->name=$date['name'];
            $personas->apellido=$date['apellido'];
            $personas->dni=$date['dni'];
            $personas->cuil=$date['cuil'];
            $personas->sexo=$date['sexo'];
            $personas->fecha_nacimiento=$date['fecha_nacimiento'];
            $personas->direccion=$date['direccion'];
            $personas->religion=$date['religion'];
            $personas->telefono=$date['telefono'];
            $personas->legajo=$date['legajo'];
            $personas->email=$date['email'];
            $personas->password=$date['password'];
            $personas->save();

            $docente=docente::where('personas_id', '=', $id)->first();

            $docente->especializaciones_id=$date['especializacion'];
            $docente->save();


            return back()->with('estado', 'tu informacion se modificado correctamente');







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(docente $docente)
    {
        //


        $docente->delete();
        return response()->json(['mensaje'=> 'se ha eliminado el docente'.$docente->name]);

    }
}
