<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;
use App\Http\Controllers\ActaEgresadoController;
use App\Http\Controllers\CronogramaEgresadoController;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EvaluacionEgresadoController;
use App\Http\Controllers\EvaluacionTrabajoController;
use App\Http\Controllers\FormatoEvaluacionController;
use App\Http\Controllers\JuntaDirectivaController;
use App\Http\Controllers\PlanTrabajoController;
use App\Http\Controllers\RequisitoEgresadoController;
use App\Http\Controllers\TipoCargoController;
use App\Http\Controllers\ReunionController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\ExportController; 

Auth::routes();
Route::view('nosotros','nosotros')->name('nosotros')->middleware('auth:sanctum');
Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home')->middleware('auth:sanctum');
Route::resource('usuarios', UserController::class)->middleware('auth:sanctum');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth:sanctum');



// Route::middleware(['auth:sanctum'])->group(function(){
// });
Route::middleware(['auth:sanctum', 'role:egresado'])->group(function () {
    // Rutas para Egresados    
});

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    // Rutas para Administradores
});

Route::controller(CronogramaEgresadoController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('cronogramas/egresados','index')->name('cronogramasEgresados.index');
    Route::get('cronogramas/egresados/create','create')->name('cronogramasEgresados.create');
    Route::post('cronogramas/egresados','store')->name('cronogramasEgresados.store');
    Route::get('cronogramas/egresados/{cronograma}','show')->name('cronogramasEgresados.show');
    Route::get('cronogramas/egresados/{cronograma}/edit','edit')->name('cronogramasEgresados.edit');
    Route::put('cronogramas/egresados/{cronograma}', 'update')->name('cronogramasEgresados.update');
    Route::delete('cronogramas/{cronograma}', 'destroy')->name('cronogramasEgresados.destroy');
});

Route::controller(PracticaController::class)->group(function(){
    Route::get('practicas','index')->name('practicas.index');
    Route::get('practicas/create','create')->name('practicas.create');
    Route::post('practicas','store')->name('practicas.store');
    Route::get('practicas/{practica}','show')->name('practicas.show');
    Route::get('practicas/{practica}/edit','edit')->name('practicas.edit');
    Route::put('practicas/{practica}', 'update')->name('practicas.update');
});

// --------------------- SEGUIMIENTO AL EGRESADO --------------------------- //

Route::controller(ActaEgresadoController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('actas','index')->name('actasEgresados.index');
    Route::get('actas/create','create')->name('actasEgresados.create');
    Route::post('actas','store')->name('actasEgresados.store');
    Route::get('actas/{acta}','show')->name('actasEgresados.show');
    Route::get('actas/{acta}/edit','edit')->name('actasEgresados.edit');
    Route::put('actas/{acta}', 'update')->name('actasEgresados.update');
    Route::delete('actas/{acta}', 'destroy')->name('actasEgresados.destroy');
});

Route::controller(EgresadoController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('egresados','index')->name('egresados.index');
    Route::get('egresados/Eg','indexE')->name('egresados.indexE');
    Route::get('egresados/create','create')->name('egresados.create');
    Route::get('egresados/charts', 'showCharts')->name('egresados.charts');
    Route::post('egresados','store')->name('egresados.store');
    Route::get('egresados/{egresado}','show')->name('egresados.show');
    Route::get('egresados/{egresado}/edit','edit')->name('egresados.edit');
    Route::put('egresados/{egresado}', 'update')->name('egresados.update');
    Route::delete('egresados/{egresado}', 'destroy')->name('egresados.destroy');
    
});

Route::controller(EmpresaController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('empresas','index')->name('empresas.index');
    Route::get('empresas/create','create')->name('empresas.create');
    Route::post('empresas','store')->name('empresas.store');
    Route::get('empresas/{empresa}','show')->name('empresas.show');
    Route::get('empresas/{empresa}/edit','edit')->name('empresas.edit');
    Route::put('empresas/{empresa}', 'update')->name('empresas.update');
    Route::delete('empresas/{empresa}', 'destroy')->name('empresas.destroy');
});

Route::controller(EvaluacionEgresadoController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('evaluaciones/egresados','index')->name('evaluacionEgresados.index');
    Route::get('evaluaciones/egresados/create','create')->name('evaluacionEgresados.create');
    Route::post('evaluaciones/egresados','store')->name('evaluacionEgresados.store');
    Route::get('evaluaciones/egresados/{evaluacion}','show')->name('evaluacionEgresados.show');
    Route::get('evaluaciones/egresados/{evaluacion}/edit','edit')->name('evaluacionEgresados.edit');
    Route::put('evaluaciones/egresados/{evaluacion}', 'update')->name('evaluacionEgresados.update');
    Route::delete('evaluaciones/egresados/{evaluacion}', 'destroy')->name('evaluacionEgresados.destroy');
});

Route::controller(EvaluacionTrabajoController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('evaluaciones/trabajos','index')->name('evaluacionTrabajo.index');
    Route::get('evaluaciones/trabajos/create','create')->name('evaluacionTrabajo.create');
    Route::post('evaluaciones/trabajos','store')->name('evaluacionTrabajo.store');
    Route::get('evaluaciones/trabajos/{evaluacion}','show')->name('evaluacionTrabajo.show');
    Route::get('evaluaciones/trabajos/{evaluacion}/edit','edit')->name('evaluacionTrabajo.edit');
    Route::put('evaluaciones/trabajos/{evaluacion}', 'update')->name('evaluacionTrabajo.update');
    Route::delete('evaluaciones/trabajos/{evaluacion}', 'destroy')->name('evaluacionTrabajo.destroy');
});

Route::controller(FormatoEvaluacionController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('formatos/evaluaciones','index')->name('formatoEvaluacion.index');
    Route::get('formatos/evaluaciones/create','create')->name('formatoEvaluacion.create');
    Route::post('formatos/evaluaciones','store')->name('formatoEvaluacion.store');
    Route::get('formatos/evaluaciones/{formato}','show')->name('formatoEvaluacion.show');
    Route::get('formatos/evaluaciones/{formato}/edit','edit')->name('formatoEvaluacion.edit');
    Route::put('formatos/evaluaciones/{formato}', 'update')->name('formatoEvaluacion.update');
    Route::delete('formatos/evaluaciones/{formato}', 'destroy')->name('formatoEvaluacion.destroy');
});

Route::controller(JuntaDirectivaController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('juntas/directivas','index')->name('juntaDirectiva.index');
    Route::get('juntas/directivas/create','create')->name('juntaDirectiva.create');
    Route::post('juntas/directivas','store')->name('juntaDirectiva.store');
    Route::get('juntas/directivas/{junta}','show')->name('juntaDirectiva.show');
    Route::get('juntas/directivas/{junta}/edit','edit')->name('juntaDirectiva.edit');
    Route::put('juntas/directivas/{junta}', 'update')->name('juntaDirectiva.update');
    Route::delete('juntas/directivas/{junta}', 'destroy')->name('juntaDirectiva.destroy');
});

Route::controller(PlanTrabajoController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('planes/trabajos','index')->name('planTrabajo.index');
    Route::get('planes/trabajos/create','create')->name('planTrabajo.create');
    Route::post('planes/trabajos','store')->name('planTrabajo.store');
    Route::get('planes/trabajos/{plan}','show')->name('planTrabajo.show');
    Route::get('planes/trabajos/{plan}/edit','edit')->name('planTrabajo.edit');
    Route::put('planes/trabajos/{plan}', 'update')->name('planTrabajo.update');
    Route::delete('planes/trabajos/{plan}', 'destroy')->name('planTrabajo.destroy');
});

Route::controller(RequisitoEgresadoController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('requisitos/egresados','index')->name('requisitoEgresado.index');
    Route::get('requisitos/egresados/create','create')->name('requisitoEgresado.create');
    Route::post('requisitos/egresados','store')->name('requisitoEgresado.store');
    Route::get('requisitos/egresados/{requisito}','show')->name('requisitoEgresado.show');
    Route::get('requisitos/egresados/{requisito}/edit','edit')->name('requisitoEgresado.edit');
    Route::put('requisitos/egresados/{requisito}', 'update')->name('requisitoEgresado.update');
    Route::delete('requisitos/egresados/{requisito}', 'destroy')->name('requisitoEgresado.destroy');
});

Route::controller(ReunionController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('reuniones','index')->name('reuniones.index');
    Route::get('reuniones/create','create')->name('reuniones.create');
    Route::post('reuniones','store')->name('reuniones.store');
    Route::get('reuniones/{reunion}','show')->name('reuniones.show');
    Route::get('reuniones/{reunion}/edit','edit')->name('reuniones.edit');
    Route::put('reuniones/{reunion}', 'update')->name('reuniones.update');
    Route::delete('reuniones/{reunion}', 'destroy')->name('reuniones.destroy');
});

Route::controller(TipoCargoController::class)->middleware('auth:sanctum')->group(function(){
    Route::get('tipos/cargos','index')->name('tipoCargos.index');
    Route::get('tipos/cargos/create','create')->name('tipoCargos.create');
    Route::post('tipos/cargos','store')->name('tipoCargos.store');
    Route::get('tipos/cargos/{tipo}','show')->name('tipoCargos.show');
    Route::get('tipos/cargos/{tipo}/edit','edit')->name('tipoCargos.edit');
    Route::put('tipos/cargos/{tipo}', 'update')->name('tipoCargos.update');
    Route::delete('tipos/cargos/{tipo}', 'destroy')->name('tipoCargos.destroy');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('export/archivo', [ExportController::class, 'pageExport'])->name('export.pageExport');
    Route::get('export/file', [ExportController::class, 'export'])->name('export.export');
});

