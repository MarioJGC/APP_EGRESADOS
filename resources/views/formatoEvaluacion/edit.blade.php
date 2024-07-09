@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('formatoEvaluacion.update', $formato)}}" method="POST">

        @csrf

        @method('put')


        <label> Codigo:
            <br>
            <input type="text" name="rubrica_evaluacion" value="{{$formato->rubrica_evaluacion}}">
        </label>
        <br><br>
        <label> Estudiante:
            <br>
            <input type="number" name="resultado_evaluacion" value="{{$formato->resultado_evaluacion}}">
        </label>
        <br><br>
        <label> Docente:
            <br>
            <input type="text" name="periodo_evaluacion" value="{{$formato->periodo_evaluacion}}">
        </label>
        <br><br>
        

        <button type="submit">Actualizar Formulario</button>
    </form>