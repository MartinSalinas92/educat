@extends('layouts.app')

@section('botones')

    <a href="{{route('talleres.index')}}" class="btn btn-primary"><i class="fas fa-backward"></i>Volver</a>

@endsection

@section('content')

    <h1 class="text-center"> Crear Taller</h1>

    <form class="row g-3 mt-5" method="POST" action="{{route('talleres.store')}}">
        @csrf
        <div class="col-md-4">
          <label class="form-label">Nombre del taller</label>
          <input type="text" class="form-control" name="nombre_taller" id="nombre_taller"
           value="{{old('nombre_taller')}}">

           @error('nombre_taller')

            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>

            </span>

           @enderror
        </div>
        <div class="col-md-4">
          <label  class="form-label">Año Cursado</label>
          <input type="text" class="form-control" name="año_cursado" id="año_cursado"
          value="{{old('año_cursado')}}">

          @error('año_cursado')

            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>

            </span>

          @enderror
        </div>
        <div class="col-4">
          <label class="form-label">Año_lectivo</label>
          <input type="Number" class="form-control" id="año_lectivo"  name="año_lectivo"
          value="{{old('año_lectivo')}}">

          @error('año_cursado')

                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>

                </span>
            @enderror
        </div>

        <div class="col-12 mt-5">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>

@endsection
