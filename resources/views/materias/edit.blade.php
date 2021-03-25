@extends('layouts.app')


@section('botones')

<a href="{{route('materias.index')}}" class="btn btn-primary"> Volver</a>

@endsection


@section('content')

    <h1 class="text-center" > Modificar Materia</h1>

    <form class="row g-3 mt-5" method="POST"  action="{{route('materia.update', $materia->id)}}">

        @csrf
        @method('PUT')


        <div class="col-md-4">
            <label class="form-label">Nombre de Materia</label>
            <input type="text" class="form-control" name="nombre_materia" id="nombre_materia"
             value="{{$materia->nombre_materia}}">

             @error('nombre_materia')

              <span class="invalid-feedback d-block" role="alert">
                  <strong>{{$message}}</strong>

              </span>

             @enderror
        </div>
        <div class="col-md-4">
            <label class="form-label">Docente</label>
            <select
                name="docente"
                class="form-control" @error('alumno') is-invalid @enderror
                id="docente"

            >



            @foreach ($docente as $item)

                <option
                    value="{{$item->personas->id}}"
                    {{$materia->docente_id==$item->personas->id ? 'selected' : ''}}

                >

                {{$item->personas->name.' '.$item->personas->apellido}}


                </option>



            @endforeach




            </select>

            @error('docente')

            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>

            </span>

            @enderror
        </div>
        <div class="col-md-4">
            <label class="form-label">Taller</label>
            <select
                name="taller"
                class="form-control" @error('taller') is-invalid @enderror
                id="taller"

            >


            @foreach ($taller as $item)

                <option
                    value="{{$item->id}}"
                    {{$materia->taller_id==$item->id ? 'selected' : ''}}

                >

                {{$item->nombre_taller}}


                </option>



            @endforeach




            </select>

            @error('taller')

            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>

            </span>

            @enderror
        </div>
        <div class="col-12 mt-5">
            <button type="submit" class="btn btn-primary">Modificar</button>
          </div>
    </form>

@endsection
