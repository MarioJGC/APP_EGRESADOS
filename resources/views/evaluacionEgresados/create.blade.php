@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros para la evaluacion de egresados por empresa</h1>

    <form action="{{route('evaluacionEgresados.store')}}" method="POST">
        
        @csrf

        <label> Numero de empresa:
            <br>
            <input type="number" name="empresa_id">
        </label>
        <br><br>
        <label> Numero de formato:
            <br>
            <input type="number" name="formato_tipo_evaluacion_id">
        </label>
        <br><br>
        
        <button type="submit">Enviar Formulario</button>
    </form>

@endsection