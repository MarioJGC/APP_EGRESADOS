@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros de formatos de evaluaciones</h1>

    <form action="{{route('juntaDirectiva.store')}}" method="POST">
        
        @csrf

        <label> Id de egresado:
            <br>
            <input type="number" name="egresado_id">
        </label>
        <br><br>
        <label> Id tipo de cargo:
            <br>
            <input type="number" name="tipo_cargo_id">
        </label>
        <br><br>
        <label> Periodo de directiva:
            <br>
            <input type="text" name="periodo_directiva">
        </label>
        <br><br>
        
        <button type="submit">Enviar Formulario</button>
    </form>

@endsection