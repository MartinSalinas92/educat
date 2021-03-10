<?php

namespace App\Http\Controllers;

use App\Models\Imagen;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //leer la imagen donde se va a almacenar





        $ruta_imagen=$request->file('file')->store('docentes', 'public');

        //rezise a la imagen
        $imagen=Image::make(public_path("storage/$ruta_imagen"))->fit(800,450);

        $imagen->save();


        //almacenar en la base de datos
        $imagendb=new Imagen;
        $imagendb->id_persona=$request['uuid'];
        $imagendb->ruta_imagen=$ruta_imagen;
        $imagendb->save();


        //Retornar Respuesta

        $respuesta =[
            'archivo'=>$ruta_imagen,
        ];




        return response()->json($respuesta);
    }


    public function destroy(Request $request,Imagen $imagen)
    {
        //

              //capturamos el request que viene del dropzones.js


              $imagen=$request->get('id');

              //borrar imagen de la carpeta storage

              if(File::exists('storage/'.$imagen)){

                //elimina del servidor
                  File::delete('storage/'.$imagen);






              };


             //eliminar de la base de datos

             $eliminarimagen=Imagen::where('ruta_imagen',  $imagen)->firstOrFail();

             Imagen::destroy($eliminarimagen->id);


              $eliminar=[
                "mensaje"=> "ha sido eliminado",
                "imagen" => $imagen
            ];




        return response()->json($eliminar);
    }
}
