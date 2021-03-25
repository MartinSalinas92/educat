@extends('layouts.app')

@section('botones')

<a href="{{route('inicio')}}" class="btn btn-primary"><i class="fas fa-backward"></i> Volver al inicio</a>
    <a href="{{route('talleres.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Agregar Taller</a>

@endsection

@section('content')

    <h1 class="text-center">Inicio Taller</h1>



    <div class="col-md-12 mx-auto bg-white p-4">
        <table class="table">
            <thead class="bg-primary text-ligth">
                <tr>
                    <th scole='col'>Carnet_id</th>
                    <th scole='col'>Nombre_taller</th>
                    <th scole='col'>Año_cursado</th>
                    <th scole='col'>Año_lectivo</th>
                    <th scole='col'>Acciones</th>


                </tr>
           </thead>
           <tbody>

               @foreach ($talleres as $item)

               <tr>

               <td>{{$item->id}}</td>
               <td>{{$item->nombre_taller}}</td>
               <td>{{$item->año_cursado}}</td>
               <td>{{$item->año_lectivo}}</td>
               <td>
                   <div class="btn btn-group">
                       <a href="{{route('talleres.edit', $item->id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                       <eliminartaller
                         :eliminartaller={{$item->id}}
                       >

                       </eliminartaller>

                   </div>
               </td>
            </tr>

               @endforeach

           </tbody>

         </table>
    </div>

@endsection
