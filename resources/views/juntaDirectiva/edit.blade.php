@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('juntaDirectiva.update', $junta)}}" method="POST">

        @csrf

        @method('put')


        <label> Id de egresado:
            <br>
            <input type="number" name="egresado_id" value="{{$junta->egresado_id}}">
        </label>
        <br><br>
        <label> Id del cargo:
            <br>
            <input type="number" name="tipo_cargo_id" value="{{$junta->tipo_cargo_id}}">
        </label>
        <br><br>
        <label> Periodo:
            <br>
            <input type="text" name="periodo_directiva" value="{{$junta->periodo_directiva}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>
    </form>