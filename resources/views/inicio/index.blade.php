@extends('layouts.app')


@section('content')

<div class="container my-5" style="font-family: 'Amatic SC', cursive">



<div class="row">
    <div class="col-md-4 mt-5" >
            <h2>Modulo docente</h2>
        <div class="card">

            <h3 class="card-title text-primary font-weigth-bold"> Profesores</h3>


            <img class="card-img-top" src="storage\docentes\ZVecNFZ361za6z46LSVaO413qVQntbVrVmePD64h.jpg">

                <a href="{{route('docentes.index')}}" class="btn btn-primary"> Ver Profesor</a>


        </div>

    </div>
    <div class="col-md-4 mt-5" >
        <h2>Modulo Alumnos</h2>
        <div class="card">

            <h3 class="card-title text-primary font-weigth-bold"> Alumnos</h3>

            <img class="card-img-top" src="storage\docentes\q5x7ZA7iuG3sl4ETRA6NLuPjhnnBoVR1T5DI6aSv.jpg">



                <a href="{{route('alumnos.index')}}" class="btn btn-primary"> Ver Alumno</a>


        </div>

    </div>
    <div class="col-md-4 mt-5" >
        <h2>Modulo Talleres</h2>
        <div class="card">

            <h3 class="card-title text-primary font-weigth-bold"> Talleres</h3>



            <img class="card-img-top" src="storage\docentes\jkuuJqkAbWabhRj1xk35tisQib6Ppy8HgpC2GRGk.jpg">


                <a href="{{route('talleres.index')}}" class="btn btn-primary"> Ver Talleres</a>


        </div>

    </div>
    <div class="col-md-4 mt-5" >
        <h2>Modulo Notas</h2>
        <div class="card">


            <h3 class="card-title text-primary font-weigth-bold"> Notas</h3>


           <img class="card-img-top" src="storage\docentes\lVDhtS2h0P6L6qXIl7nDT5HmAKmc2QGPKuMo4Rxo.jpg"></img>
                <a href="" class="btn btn-primary"> Ver Notas</a>


        </div>

    </div>

</div>

</div>



@endsection


