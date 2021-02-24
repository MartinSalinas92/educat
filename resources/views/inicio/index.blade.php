@extends('layouts.app')


@section('content')

<div class="container my-5">

    <h2>Modulo docente</h2>

<div class="row">
    <div class="col-md-4 mt-5">
        <div class="card">
            <h3 class="card-title text-primary font-weigth-bold"> Profesores</h3>


                <a href="{{route('docentes.index')}}" class="btn btn-primary"> Ver Profesor</a>


        </div>

    </div>

</div>

</div>



@endsection


