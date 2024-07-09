@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('planTrabajo.update', $plan)}}" method="POST">

        @csrf

        @method('put')

        <label> Id del cronograma:
            <br>
            <input type="number" name="cronograma_egresado_id" value="{{$plan->cronograma_egresado_id}}">
        </label>
        <br><br>
        <label> Evaluacion del trabajo:
            <br>
            <input type="number" name="evaluacion_trabajos_id" value="{{$plan->evaluacion_trabajos_id}}">
        </label>
        <br><br>
        <label> Id del egresado:
            <br>
            <input type="number" name="egresado_id" value="{{$plan->egresado_id}}">
        </label>
        <br><br>
        <label> Informe del plan de trabajo:
            <br>
            <input type="text" name="informe_plan_trabajo" value="{{$plan->informe_plan_trabajo}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>
    </form>