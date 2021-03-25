@extends('layouts.app')

@section('botones')

<a href="{{route('inicio')}}" class="btn btn-primary"><i class="fas fa-backward"></i> Volver al inicio</a>

<a href="{{route('alumnos.create')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Agregar Alumno</a>

@endsection

@section('content')

<h1 class="text-center"> Alumnos</h1>

<div class="col-md-12 mx-auto bg-white p-4">
    <table class="table">
        <thead class="bg-primary text-ligth">
            <tr>
                <th scole='col'>Carnet_id</th>
                <th scole='col'>Nombre</th>
                <th scole='col'>Apellido</th>
                <th scole='col'>DNI</th>
                <th scole='col'>Nivel_Academico</th>
                <th scole='col'>Acciones</th>


            </tr>

        </thead>
        <tbody>
            @foreach ($alumnos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->personas->name}}</td>
                    <td>{{$item->personas->apellido}}</td>
                    <td>{{$item->personas->dni}}</td>
                    <td>{{$item->nivel_academico->nivel}}</td>

                    <td>
                        <div class="btn btn-group">
                        <a href="{{route('alumnos.edit', $item->id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        <eliminaralumno
                            :eliminaralumno={{$item->id}}

                        >

                        </eliminaralumno>

                        <a href="{{route('nota.create', $item->id)}}" class="btn btn-success"><i class="far fa-clipboard"></i></a>
                    </div>

                    </td>
                </tr>

            @endforeach


        </tbody>

@endsection





