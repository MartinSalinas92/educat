@extends('layouts.app')

@section('botones')
<a href="{{route('alumnos.index')}}" class="btn btn-primary"><i class="fas fa-backward"></i>Volver atras</a>

@endsection

@section('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css" integrity="sha256-NkyhTCRnLQ7iMv7F3TQWjVq25kLnjhbKEVPqGJBcCUg=" crossorigin="anonymous" />
@endsection


@section('content')






        <h1 class="text-center"> Editar Alumno {{ucfirst($alumnos->personas->name)}}</h1>

        <div class="row justify-content-center mt-5">

            <form method="POST" action="{{route('alumnos.update', $alumnos->personas->id)}}" >

                @csrf
                @method('PUT')

                <legend class="text-primary" > Datos personales</legend>
                            <div class="form-group">
                                <label for="name"> Nombre</label>

                                <input
                                    type="text"
                                    placeholder="ingrese su nombre"
                                    class="form-control"
                                    name="name"
                                    id='name'   value="{{$alumnos->personas->name}}"

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
                                    id='apellido'   value="{{$alumnos->personas->apellido}}"

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
                                    id="dni"   value="{{$alumnos->personas->dni}}"

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
                                    id="cuil"   value="{{$alumnos->personas->cuil}}"

                                />

                                    @error('cuil')
                                        <span class="invalid-feedback d-block" role="alert">

                                            <strong>{{$message}}</strong>
                                        </span>

                                    @enderror





                            </div>

                            <div class="form-group">
                                <label>Sexo</label><br>

                                @if ($alumnos->personas->sexo=='hombre')

                                    @php($hombre= 'checked')
                                    @php($mujer= '')


                                @else
                                    @php($hombre= '')
                                    @php($mujer= 'checked')

                                @endif





                            <div class="form-check form-check-inline">



                                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino" {{$hombre}}>
                                <label class="form-check-label" for="masculino">Masculino</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Femenino" {{$mujer}}>
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
                                    value="{{$alumnos->personas->fecha_nacimiento}}"




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
                                        value="{{$alumnos->personas->direccion}}"

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
                                        value="{{$alumnos->personas->religion}}"

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
                                        value="{{$alumnos->personas->telefono}}"
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
                                        value="{{$alumnos->personas->legajo}}"
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
                                        value="{{$alumnos->personas->email}}"

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
                                        value="{{$alumnos->personas->password}}"

                                    />

                                    @error('password')
                                    <span class="invalid-feedback d-block" role="alert">

                                        <strong>{{$message}}</strong>
                                    </span>

                                @enderror

                                </div>

                                <div class="form-group">
                                    <label for="nivel_academico">Nivel Academico</label>

                                    <select
                                    name="nivel"
                                    class="form-control @error('nivel') is-invalid @enderror"
                                    id="nivel"

                                    >

                                    @foreach ($nivel_educacion as $item)

                                    <option
                                            value="{{$item->id}}"


                                            {{$alumnos->nivel_academico_id== $item->id ?'selected' : ''}}
                                            >


                                            {{$item->nivel}}

                                    </option>

                                    @endforeach




                                    </select>

                                </div>

                                <input type="hidden" id="uuid" name="uuid" value="{{$alumnos->personas->uuid}}">

                                <fieldset class = "border p-4 mt-5 " >
                                    <legend   class = "text-primary" >Implementar Imagen de docentes Inicio</legend>
                                        <div class = "form-group ">
                                            <label  for = "imagenes"> Imagenes </label >

                                                <div id="dropzoneDocentes" class="dropzone form-control"></div>
                                                @foreach ($imagen as $item)

                                                <input type="hidden" name="imagen" id="imagen" value="{{$item->ruta_imagen}}">

                                                @endforeach


                                        </div>
                                </fieldset>

                                <div class="form-group">
                                    <input type="submit"
                                    class="btn btn-primary btn-block"
                                    value="Modificar Alumno" />

                                </div>

                            </div>




                            </div>




            </form>




           </div>

        @endsection

        @section('script')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous">
        </script>

        @endsection



