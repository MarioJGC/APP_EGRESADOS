@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('evaluacionEgresados.update', $evaluacion)}}" method="POST">

        @csrf

        @method('put')



        <label> Id de empresa:
            <br>
            <input type="number" name="empresa_id" value="{{$evaluacion->empresa_id}}">
        </label>
        <br><br>
        <label> Formato de la evaluacion:
            <br>
            <input type="number" name="formato_tipo_evaluacion_id" value="{{$evaluacion->formato_tipo_evaluacion_id}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>
    </form>