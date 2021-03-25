@extends('layouts.app');

@section('botones')

<a href="{{route('inicio')}}" class="btn btn-primary">Volver al Inicio</a>
<a href="{{route('especificaciones.create')}}" class="btn btn-primary">Crear Especializaciones </a>

@endsection

@section('content')

     <h1 class="text-center"> Especializaciones</h1>



     <div class="col-md-12 mx-auto bg-white p-4">
         <table class="table">
             <thead class="bg-primary text-ligth">
                 <tr>
                     <th scole='col'>Carnet_id</th>
                     <th scole='col'>Nombre Especialidad</th>
                     <th scole='col'>Acciones</th>
                 </tr>

             </thead>
             <tbody>

                @foreach ($especializaciones as $item)

                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre_especializacion}}</td>
                        <td>
                           <div class="btn btn-group">
                               <a href="{{route('especialidad.edit', $item->id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                               <eliminarespecialidad
                                    :eliminaresp={{$item->id}}

                               >

                               </eliminarespecialidad>

                           </div>
                        </td>
                    </tr>

                @endforeach

             </tbody>

         </table>

     </div>






@endsection
