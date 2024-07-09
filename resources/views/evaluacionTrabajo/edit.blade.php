@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('evaluacionTrabajo.update', $evaluacion)}}" method="POST">

        @csrf

        @method('put')

        <label> Descripcion:
            <br>
            <input type="text" name="descripcion_evaluacion_trabajo" value="{{$evaluacion->descripcion_evaluacion_trabajo}}">
        </label>
        <br><br>
        <label> Porcentaje de avance:
            <br>
            <input type="number" name="porcentaje_avance_evaluacion_trabajo" value="{{$evaluacion->porcentaje_avance_evaluacion_trabajo}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>
    </form>