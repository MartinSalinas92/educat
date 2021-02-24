@extends('layouts.app')

@section('botones')

    <a href="{{route('docentes.index')}}" class="btn btn-primary">Volver atras</a>

@endsection


@section('content')

    <h1 class="text-center">Crear Docentes</h1>

    <div class="row justify-content-center mt-5">



        <form method="POST" action="{{route('docentes.store')}}">

            @csrf

                <legend class="text-primary" > Datos personales</legend>
                    <div class="form-group">
                        <label for="name"> Nombre</label>

                        <input
                            type="text"
                            placeholder="ingrese su nombre"
                            class="form-control"
                            name="name"
                            id='name'   value="{{old('name')}}"

                            />

                            @error('name')
                                <span class="invalid-feedback d-block" role="alert">

                                    <strong>{{$message}}</strong>
                                </span>

                            @enderror





                    </div>
                    <div class="form-group">
                        <label for="apellido"> Apellido</label>

                        <input
                            type="text"
                            placeholder="ingrese su nombre"
                            class="form-control"
                            name="apellido"
                            id='apellido'   value="{{old('apellido')}}"

                            />

                            @error('apellido')
                                <span class="invalid-feedback d-block" role="alert">

                                    <strong>{{$message}}</strong>
                                </span>

                            @enderror





                    </div>

                    <div class="form-group">
                        <label for="dni"> Dni </label>

                        <input
                            type="text"
                            placeholder="36207588"
                            class="form-control"
                            name="dni"
                            id="dni"   value="{{old('dni')}}"

                            />

                            @error('dni')
                                <span class="invalid-feedback d-block" role="alert">

                                    <strong>{{$message}}</strong>
                                </span>

                            @enderror





                    </div>
                    <div class="form-group">
                        <label for="cuil">Cuil </label>

                        <input
                            type="text"
                            placeholder="29-36207588-8"
                            class="form-control"
                            name="cuil"
                            id="cuil"   value="{{old('cuil')}}"

                        />

                            @error('cuil')
                                <span class="invalid-feedback d-block" role="alert">

                                    <strong>{{$message}}</strong>
                                </span>

                            @enderror





                    </div>

                    <div class="form-group">
                        <label>Sexo</label><br>

                    <div class="form-check form-check-inline">

                        <input class="form-check-input" type="radio" name="sexo" id="sexo" value="masculino">
                        <label class="form-check-label" for="masculino">Masculino</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="sexo" value="femenino">
                        <label class="form-check-label" for="inlineRadio2">Femenino</label>
                      </div>





                                        @error('sexo')
                                            <span class="invalid-feedback d-block" role="alert">

                                                <strong>{{$message}}</strong>
                                            </span>

                                        @enderror





                        </div>

                        <div class="form-group">
                            <label for="">Fecha de nacimiento</label>
                            <input
                            type="date"
                            class="form-control"
                            name="fecha_nacimiento"




                            />

                            @error('fecha_nacimiento')
                            <span class="invalid-feedback d-block" role="alert">

                                <strong>{{$message}}</strong>
                            </span>

                        @enderror

                        </div>

                        <div class="form-group">
                            <label for="">Direccion</label>
                            <input
                                type="text"
                                class="form-control"
                                name="direccion"
                                id="direccion"

                            />

                            @error('direccion')
                            <span class="invalid-feedback d-block" role="alert">

                                <strong>{{$message}}</strong>
                            </span>

                        @enderror

                        </div>
                        <div class="form-group">
                            <label for="">Religion</label>
                            <input
                                type="text"
                                class="form-control"
                                name="religion"
                                id="religion"

                            />

                            @error('religion')
                            <span class="invalid-feedback d-block" role="alert">

                                <strong>{{$message}}</strong>
                            </span>

                        @enderror

                        </div>

                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input
                                type="text"
                                class="form-control"
                                name="telefono"
                                id="telefono"

                            />

                            @error('telefono')
                            <span class="invalid-feedback d-block" role="alert">

                                <strong>{{$message}}</strong>
                            </span>

                        @enderror

                        </div>
                        <div class="form-group">
                            <label for="">legajo</label>
                            <input
                                type="text"
                                class="form-control"
                                name="legajo"
                                id="legajo"

                            />

                            @error('legajo')
                            <span class="invalid-feedback d-block" role="alert">

                                <strong>{{$message}}</strong>
                            </span>

                        @enderror

                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input
                                type="text"
                                class="form-control"
                                name="email"
                                id="email"

                            />

                            @error('email')
                            <span class="invalid-feedback d-block" role="alert">

                                <strong>{{$message}}</strong>
                            </span>

                        @enderror

                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                id="password"

                            />

                            @error('password')
                            <span class="invalid-feedback d-block" role="alert">

                                <strong>{{$message}}</strong>
                            </span>

                        @enderror

                        </div>

                        <div class="form-group">
                            <label for="especializacion">Especialidad</label>

                            <select
                            name="especializacion"
                            class="form-control @error('especialidad') is-invalid @enderror"
                            id="especializacion"

                            >

                            <option disabled selected> Seleccionar</option>

                            @foreach ($especializacion as $item)

                               <option
                                value="{{$item->id}}"
                                {{old('especialidad')== $item->id ? 'selected' : ''}}

                                >

                                {{$item->nombre_especializacion}}

                                </option>



                            @endforeach


                            </select>

                        </div>

                        <div class="form-group">
                            <input type="submit"
                            class="btn btn-primary btn-block"
                            value="Guardar Docente" />

                        </div>

                    </div>




                    </div>







        </form>


    </div>

@endsection
