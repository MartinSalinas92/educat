<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\InicioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {

Route::get('/inicio', InicioController::class, 'index')->name('inicio');

//Docentes
Route::get('/docentes', [App\Http\Controllers\DocenteController::class, 'index'])->name('docentes.index');
Route::get('/docentes/create', [App\Http\Controllers\DocenteController::class, 'create'])->name('docentes.create');
Route::post('/docentes', [App\Http\Controllers\DocenteController::class, 'store'])->name('docentes.store');
Route::get('/docentes/{docente}/edit', [App\Http\Controllers\DocenteController::class, 'edit'])->name('docentes.edit');
Route::put('/docentes/{id}',[App\Http\Controllers\DocenteController::class, 'update'] )->name('docentes.update');
Route::delete('docentes/{docente}',[App\Http\Controllers\DocenteController::class, 'destroy'])->name('docentes.destroy');


//Subir imagenes
Route::post('/docentes/imagenes',[App\Http\Controllers\ImagenController::class, 'store'] )->name('docentes.imagenes');
Route::post('/imagenes/destroy',[App\Http\Controllers\ImagenController::class, 'destroy'] )->name('docentes.eliminar');

//Alumnos
Route::get('/alumnos', [App\Http\Controllers\AlumnosController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos/create',  [App\Http\Controllers\AlumnosController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos',[App\Http\Controllers\AlumnosController::class, 'store'])->name('alumnos.store');
Route::get('/alumnos/{id}/edit', [App\Http\Controllers\AlumnosController::class, 'edit'])->name('alumnos.edit');
Route::put('/alumnos/{id}', [App\Http\Controllers\AlumnosController::class, 'update'])->name('alumnos.update');
Route::delete('/alumnos/{alumno}', [App\Http\Controllers\AlumnosController::class, 'destroy'])->name('alumnos.destroy');

//Talleres
Route::get('/talleres', [App\Http\Controllers\TallerController::class, 'index'])->name('talleres.index');
Route::get('/talleres/create', [App\Http\Controllers\TallerController::class, 'create'])->name('talleres.create');
Route::post('/talleres',[App\Http\Controllers\TallerController::class, 'store'] )->name('talleres.store');
Route::get('/talleres/{taller}/edit', [App\Http\Controllers\TallerController::class, 'edit'])->name('talleres.edit');
Route::put('talleres/{id}', [App\Http\Controllers\TallerController::class, 'update'] )->name('talleres.update');
Route::delete('/talleres/{taller}', [App\Http\Controllers\TallerController::class, 'destroy'] )->name('talleres.destroy');

//Especificaciones
Route::get('/especificaciones', [App\Http\Controllers\EspecializacionController::class, 'index'])->name('especificaciones.index');
Route::get('/especificaciones/create', [App\Http\Controllers\EspecializacionController::class, 'create'])->name('especificaciones.create');
Route::post('/especialidad', [App\Http\Controllers\EspecializacionController::class, 'store'] )->name('especialidad.store');
Route::get('/especialidad/{especializacion}/edit', [App\Http\Controllers\EspecializacionController::class, 'edit'])->name('especialidad.edit');
Route::put('/especialidad/{id}', [App\Http\Controllers\EspecializacionController::class, 'update'])->name('especialidad.update');
Route::delete('/especialidad/{especializacion}', [App\Http\Controllers\EspecializacionController::class, 'destroy'])->name('especialidad.destroy');

//materias
Route::get('/materias', [App\Http\Controllers\MateriaController::class, 'index'] )->name('materias.index');
Route::get('/materias/create', [App\Http\Controllers\MateriaController::class, 'create'] )->name('materias.create');
Route::post('/materias', [App\Http\Controllers\MateriaController::class, 'store'] )->name('materia.store');
Route::get('/materias/{materia}/edit', [App\Http\Controllers\MateriaController::class, 'edit'])->name('materia.edit');
Route::put('/materias/{id}',[App\Http\Controllers\MateriaController::class, 'update'])->name('materia.update');
Route::delete('/materias/{materia}', [App\Http\Controllers\MateriaController::class, 'destroy'] )->name('materia.destroy');

//Notas
Route::get('/notas/create/{id}', [App\Http\Controllers\NotaController::class, 'create'] )->name('nota.create');


});
