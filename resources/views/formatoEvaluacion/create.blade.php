@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros de formatos de evaluaciones</h1>

    <form action="{{route('formatoEvaluacion.store')}}" method="POST">
        
        @csrf

        <label> Rubrica de evaluacion:
            <br>
            <input type="text" name="rubrica_evaluacion">
        </label>
        <br><br>
        <label> Resultado de evaluacion:
            <br>
            <input type="number" name="resultado_evaluacion">
        </label>
        <br><br>
        <label> Periodo de evaluacion:
            <br>
            <input type="text" name="periodo_evaluacion">
        </label>
        <br><br>
        
        <button type="submit">Enviar Formulario</button>
    </form>

@endsection