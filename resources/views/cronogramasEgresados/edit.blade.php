@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('cronogramasEgresados.update', $cronograma)}}" method="POST">

        @csrf

        @method('put')

        <label> Codigo:
            <br>
            <input type="text" name="numero_cronograma" value="{{$cronograma->numero_cronograma}}">
        </label>
        <br><br>
        <label> Estudiante:
            <br>
            <input type="text" name="actividad_cronograma" value="{{$cronograma->actividad_cronograma}}">
        </label>
        <br><br>
        <label> Docente:
            <br>
            <input type="datetime" name="fecha_cronograma" value="{{$cronograma->fecha_cronograma}}">
        </label>
        <br><br>
        <label> Empresa:
            <br>
            <input type="text" name="periodo_cronograma" value="{{$cronograma->periodo_cronograma}}">
        </label>
        <br><br>
        
        <button type="submit">Actualizar Formulario</button>
    </form>