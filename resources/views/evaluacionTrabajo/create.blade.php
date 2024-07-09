@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros evaluacionde trabajos</h1>

    <form action="{{route('evaluacionTrabajo.store')}}" method="POST">
        
        @csrf

        <label> Descripcion de la evaluacion:
            <br>
            <input type="text" name="descripcion_evaluacion_trabajo">
        </label>
        <br><br>
        <label> Porcentaje de evaluacion:
            <br>
            <input type="number" name="porcentaje_avance_evaluacion_trabajo">
        </label>
        <br><br>
        
        <button type="submit">Enviar Formulario</button>
    </form>

@endsection