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



});
