<?php

use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/pacientes/{id}/nuevo', [\App\Http\Controllers\PresupuestoController::class,'nuevo'])->name('pacientes.nuevo');






Route::post('{doctor}/{fecha}/show', [\App\Http\Controllers\CitaController::class,'dia']);
Route::post('citas/{doctor}/create', [\App\Http\Controllers\CitaController::class,'create']);
Route::post('jornadas/{doctor}/create', [\App\Http\Controllers\JornadaController::class,'create']);
Route::post('horarios/{doctor}/create', [\App\Http\Controllers\HorarioController::class,'horario']);
//Route::post('horarios/{doctor}/', [\App\Http\Controllers\HorarioController::class,'mostrarHorario']);
Route::post('horarios/{doctor}/guardar', [\App\Http\Controllers\HorarioController::class,'store']);
Route::get('/test/', [\App\Http\Controllers\HorarioController::class, 'test']);
Route::get('/pacientes/{id}/cita', [\App\Http\Controllers\AppointmentController::class, 'create']);
Route::post('/pacientes/{id}/miscitas', [\App\Http\Controllers\AppointmentController::class, 'store']);
Route::get('/pacientes/{id}/presupuesto', [\App\Http\Controllers\PresupuestoController::class, 'create']);
Route::get('/', [App\Http\Controllers\PacienteController::class, 'index'])->name('home');

Route::resource('pacientes', \App\Http\Controllers\PacienteController::class);
Route::resource('doctores', \App\Http\Controllers\DoctorController::class);
Route::resource('convenios', \App\Http\Controllers\ConvenioController::class);
Route::resource('presupuestos', \App\Http\Controllers\PresupuestoController::class);
Route::resource('servicios', \App\Http\Controllers\ServicioController::class);
Route::resource('departamentos', \App\Http\Controllers\DepartamentoController::class);
Route::resource('jornadas', \App\Http\Controllers\JornadaController::class);
Route::resource('agendas', \App\Http\Controllers\AgendaController::class);
Route::resource('horarios', \App\Http\Controllers\HorarioController::class);


Route::view('/recepcionista', 'perfil.recepcionista')->name('recepcionista');
//Route::view('/doctor', 'perfil.doctor')->name('doctor');
Route::view('/administrador', 'perfil.administrador')->name('administrador');
Route::view('/', 'home');
Route::get('/citas/create', [CitaController::class,'create']);

Route::get('/cmd/{command}', function($command)
{
    Artisan::call($command);
    dd(Artisan::output());
});
