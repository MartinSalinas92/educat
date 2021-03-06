@extends('layouts.app')

@section('botones')

    <a href="{{route('inicio')}}" class="btn btn-info"><i class="fas fa-backward"></i> Volver a inicio</a>
    <a href="{{route('docentes.create')}}" class="btn btn-info"><i class="fa fa-user-plus"></i> Agregar Docentes</a>


@endsection

@section('content')

        <h1 class="text-center"> DOCENTES</h1>

        <div class="col-md-12 mx-auto bg-white p-4">
            <table class="table">
                <thead class="bg-primary text-ligth">
                    <tr>
                        <th scole='col'>Carnet_id</th>
                        <th scole='col'>Nombre</th>
                        <th scole='col'>Apellido</th>
                        <th scole='col'>DNI</th>
                        <th scole='col'>Especializacion</th>
                        <th scole='col'>Acciones</th>


                    </tr>

                </thead>
                <tbody>
                    @foreach ($docente as $item)

                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->personas->name}}</td>
                            <td>{{$item->personas->apellido}}</td>
                            <td>{{$item->personas->dni}}</td>
                            <td>{{$item->especializacion->nombre_especializacion}}</td>

                            <td>
                                <div class="btn btn-group">
                                <a href="{{route('docentes.edit', $item->id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                <eliminar

                                    :eliminardocente={{$item->id}}

                                >

                                </eliminar>

                                <a href="" class="btn btn-success"><i class="far fa-eye"></i></a>
                            </div>
                            </td>
                        </tr>

                    @endforeach

                </tbody>

            </table>


        </div>


@endsection
