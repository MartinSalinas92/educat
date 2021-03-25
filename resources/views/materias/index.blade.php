@extends('layouts.app')

@section('botones')

<a href="{{route('inicio')}}" class="btn btn-primary">Volver al Inicio</a>
<a href="{{route('materias.create')}}" class="btn btn-primary">Crear Materias </a>

@endsection

@section('content')

        <h1 class="text-center"> Materias</h1>

        <div class="col-md-12 mx-auto bg-white p-4">
            <table class="table">
                <thead class="bg-primary text-ligth">
                    <tr>
                        <th scole='col'>Nombre_materia</th>
                        <th scole='col'>Docente</th>
                        <th scole='col'>Taller</th>
                        <th scole='col'>Acciones</th>


                    </tr>

                </thead>
                <tbody>
                    @foreach ($materia as $item)

                        <tr>
                            <td>{{$item->nombre_materia}}</td>
                            <td>{{$item->docente->name.' '.$item->docente->apellido }}</td>
                            <td>{{$item->taller->nombre_taller}}</td>


                            <td>
                                <div class="btn btn-group">

                                 <a href="{{route('materia.edit', $item->id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>

                                 <eliminarmateria

                                    :eliminarmateria={{$item->id}}

                                 >

                                 </eliminarmateria>
                                </div>
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>


        </div>





@endsection
