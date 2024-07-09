@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros</h1>

    <form action="{{route('planTrabajo.store')}}" method="POST">
        
        @csrf

        <label> Id del Cronograma:
            <br>
            <input type="number" name="cronograma_egresado_id">
        </label>
        <br><br>
        <label> Id de evaluacion:
            <br>
            <input type="number" name="evaluacion_trabajos_id">
        </label>
        <br><br>
        <label> Id de Egresado:
            <br>
            <input type="number" name="egresado_id">
        </label>
        <br><br>
        <label> Informe de plan de trabajo:
            <br>
            <input type="text" name="informe_plan_trabajo">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection