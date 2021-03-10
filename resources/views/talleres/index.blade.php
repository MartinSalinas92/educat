@extends('layouts.app')

@section('botones')

<a href="{{route('inicio')}}" class="btn btn-primary"><i class="fas fa-backward"></i> Volver al inicio</a>
    <a href="{{route('talleres.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Agregar Taller</a>

@endsection

@section('content')

    <h1 class="text-center">Inicio Taller</h1>

    {{$talleres}}

@endsection
