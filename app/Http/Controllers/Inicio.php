<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\persona;
use Illuminate\Http\Request;

class Inicio extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        return view('inicio.index');
    }
}
