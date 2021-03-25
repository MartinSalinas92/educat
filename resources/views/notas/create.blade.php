@extends('layouts.app')

@section('botones')

<a href="{{route('alumnos.index')}}" class="btn btn-primary"><i class="fas fa-backward"></i>Volver atras</a>

@endsection


@section('content')

    <h1 class="text-center"> Agregar Notas</h1>


    <form class="row g-3 mt-5" method="POST" action="{{route('talleres.store')}}">
        @csrf


        <div class="col-md-12 mt-5">

            <label class="form-label"> Alumno</label>



            <select
            name="alumno"
            class="form-control" @error('alumno') is-invalid @enderror
            id="docente"

            >




                @foreach ($persona as $item)

                    <option
                        value="{{$item->id}}"


                    >

                    {{$item->name.' '.$item->apellido}}


                    </option>

                @endforeach
            </select>





             @error('alumno')

              <span class="invalid-feedback d-block" role="alert">
                  <strong>{{$message}}</strong>

              </span>

             @enderror

    </div>


        <div class="col-md-12 mt-5">

                <label class="form-label"> Asignaturaa</label>



                <select
                name="materia"
                class="form-control" @error('materia') is-invalid @enderror
                id="materia"

                >


                <option disabled selected> Seleccionar</option>


                    @foreach ($materia as $item)

                        <option
                            value="{{$item->id}}"


                        >

                        {{$item->nombre_materia}}


                        </option>

                    @endforeach
                </select>





                 @error('materia')

                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>

                  </span>

                 @enderror

        </div>
        <div class="col-md-12 mt-5">

                <label class="form-label"> Taller</label>



                <select
                name="taller"
                class="form-control" @error('materia') is-invalid @enderror
                id="taller"

                >


                <option disabled selected> Seleccionar</option>


                    @foreach ($taller as $item)

                        <option
                            value="{{$item->id}}"


                        >

                        {{$item->nombre_taller}}


                        </option>

                    @endforeach
                </select>





                 @error('materia')

                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>

                  </span>

                 @enderror

        </div>

        <div class="col-md-12 mt-5">

                <label class="form-label"> Profesor</label>



                <select
                name="docente"
                class="form-control" @error('docente') is-invalid @enderror
                id="docente"

                >


                <option disabled selected> Seleccionar</option>


                    @foreach ($docente as $item)

                        <option
                            value="{{$item->id}}"


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


    <div class="col-md-12 agregar_notas">




    </div>


    <input type="hidden" name="listarNotas" id="listarNotas">
    <!--======================================================
      BOTON PARA AGREGAR NOTAS
      =========================================================-->

      <div class="btn-group col-12 mt-5">
        <button type="button" class="btn btn-success hidden-lg btnAgregarNotas mt-5" id="btnbtn"><i class="fa fa-plus-square" aria-hidden="true"></i>Agregar Notas</button>
        <button type="button" style="display:none" class="btn btn-primary" id="btnocut"> <i class="fa fa-check"></i></button>


      </div>


        <div class="col-12 mt-5">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

      </form>

@endsection

|@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


@endsection
