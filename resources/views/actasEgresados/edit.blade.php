@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('actasEgresados.update', $acta)}}" method="POST">

        @csrf

        @method('put')

        <label> Id reunion:
            <br>
            <input type="number" name="reunion_id" value="{{$acta->reunion_id}}">
        </label>
        <br><br>
        <label> Id junta:
            <br>
            <input type="number" name="junta_directiva_egresado_id" value="{{$acta->junta_directiva_egresado_id}}">
        </label>
        <br><br>
        <label> Id egresado:
            <br>
            <input type="number" name="egresado_id" value="{{$acta->egresado_id}}">
        </label>
        <br><br>
        <label> Resultado:
            <br>
            <input type="text" name="resultado_acta_egresado" value="{{$acta->resultado_acta_egresado}}">
        </label>
        <br><br>
        <label> Firma:
            <br>
            <input type="text" name="firma_responsable_acta_egresado" value="{{$acta->firma_responsable_acta_egresado}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>
    </form>