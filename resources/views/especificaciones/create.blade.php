@extends('layouts.app')


@section('botones')

    <a href="{{route('especificaciones.index')}}" class="btn btn-primary">Volver</a>

@endsection

@section('content')



<h1 class="text-center"> Crear Especializacion</h1>

<div class="row justify-content-center mt-5">




        <form method="POST" action="{{route('especialidad.store')}}">

            @csrf

                <div class="form-group">
                    <label class="form-label">Nombre de Especialidad</label>
                    <input type="text" class="form-control" name="nombre_especialidad" id="nombre_especialidad"
                     value="{{old('nombre_especialidad')}}">

                     @error('nombre_especialidad')

                      <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>

                      </span>

                     @enderror
                  </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary"> Guardar Especialidad</button>

                </div>


        </form>
    </div>



@endsection
