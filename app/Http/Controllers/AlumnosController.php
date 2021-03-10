<?php

namespace App\Http\Controllers;


use App\Models\alumno;
use App\Models\Imagen;
use App\Models\persona;
use Illuminate\Http\Request;
use App\Models\nivel_academico;

class AlumnosController extends Controller
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
        $nivel=nivel_academico::all();
        $alumnos=alumno::all();

        return view('alumnos.index', compact('personas', 'nivel', 'alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $nivel= nivel_academico::all();

        return view('alumnos.create', compact('nivel'));
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
            'uuid'=>'required|uuid',
            'email'=>'required',
            'password'=>'required',
            'nivel'=>'required'

        ]);

        $personas=persona::create([

            'name'=>$data['name'],
            'apellido'=>$data['apellido'],
            'dni'=>$data['dni'],
            'cuil'=>$data['cuil'],
            'sexo'=>$data['sexo'],
            'fecha_nacimiento'=>$data['fecha_nacimiento'],
            'direccion'=>$data['direccion'],
            'religion'=>$data['religion'],
            'telefono'=>$data['telefono'],
            'legajo'=>$data['legajo'],
            'uuid'=>$data['uuid'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password']),



        ]);

        $alumnos=alumno::create([
            'personas_id'=>$personas->id,
            'nivel_academico_id'=>$data['nivel']

        ]);



        return back()->with('estado','la informacion del alumno ha sido guardada correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(alumno $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit(alumno $alumno, $id)
    {
        //


        $alumnos=alumno::findOrFail($id);
        $personas=persona::where('id','=', $alumnos->personas_id)->get();

        foreach ($personas as  $value) {

            $imagen=Imagen::where('id_persona', '=', $value->uuid)->get();

        }



        $nivel_educacion=nivel_academico::all();


        return view('alumnos.edit', compact('nivel_educacion', 'personas', 'alumnos', 'imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alumno $alumno, $id)
    {
        //return $id;

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
            'uuid'=>'required|uuid',
            'email'=>'required',
            'password'=>'required',
            'nivel'=>'required'

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

        $alumnos=alumno::where('personas_id', $id)->first();

        $alumnos->nivel_academico_id=$date['nivel'];

        $alumnos->save();

        return back()->with('estado','La informacion ha sido modificada correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alumno  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumno $alumno)
    {




        $alumno->delete();

        return response()->json(['mensaje'=>'Se ha eliminado el alumno']);
    }
}
