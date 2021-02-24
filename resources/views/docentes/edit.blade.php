@extends('layouts.app')


@section('botones')

    <a href="{{route('docentes.index')}}" class="btn btn-primary"> Volver al Inicio</a>

@endsection


@section('content')

             <h1 class="text-center">Editar Docente {{$docente->personas->name}}</h1>

             <div class="row justify-content-center mt-5">



                <form method="POST" action="{{route('docentes.update', $docente->personas->id)}}">

                    @csrf
                    @method('PUT')

                        <legend class="text-primary" > Datos personales </legend>
                            <div class="form-group">
                                <label for="name"> Nombre</label>

                                <input
                                    type="text"
                                    placeholder="ingrese su nombre"
                                    class="form-control"
                                    name="name"
                                    id='name'
                                    value="{{$docente->personas->name}}"

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
                                    id='apellido'
                                    value="{{$docente->personas->apellido}}"

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
                                    id="dni"
                                    value="{{$docente->personas->dni}}"

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
                                    id="cuil"
                                    value="{{$docente->personas->cuil}}"

                                />

                                    @error('cuil')
                                        <span class="invalid-feedback d-block" role="alert">

                                            <strong>{{$message}}</strong>
                                        </span>

                                    @enderror





                            </div>



    <div class="form-group">

        <label>Sexo</label><br>

        @if ($docente->personas->sexo=='hombre')

            @php ($hombre = 'checked')
            @php ($mujer = '')

        @else

                @php ($hombre = '')
                @php ($mujer = 'checked')

        @endif



                    <div class="form-check form-check-inline">

                                        <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="Masculino" {{$hombre}}>
                                        <label class="form-check-label" for="masculino">Masculino</label>
                                    </div>



                                    <div class="form-check form-check-inline" id="check2">
                                        <input class="form-check-input" type="radio" name="sexoF" id="sexo" value="femenino" {{$mujer}} >
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
                                    value="{{$docente->personas->fecha_nacimiento}}"




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
                                        value="{{$docente->personas->direccion}}"

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
                                        value="{{$docente->personas->religion}}"
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
                                        value="{{$docente->personas->telefono}}"

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
                                        value="{{$docente->personas->legajo}}"

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
                                        value="{{$docente->personas->email}}"

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
                                        value="{{$docente->personas->password}}"

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



                                    @foreach ($especialidad as $item)

                                        <option
                                            value="{{$item->id}}">
                                            {{$docente->especializaciones_id==$item->id ? 'selected' : ''}}



                                            {{$item->nombre_especializacion}}

                                            </option>

                                    @endforeach

                                    </select>

                                </div>

                                <div class="form-group">
                                    <input type="submit"
                                    class="btn btn-primary btn-block"
                                    value="Modificar Docente" />

                                </div>

                            </div>




                            </div>







                </form>


            </div>


@endsection
