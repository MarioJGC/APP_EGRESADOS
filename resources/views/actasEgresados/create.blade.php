@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros para cada Acta de Egresados</h1>

    <form action="{{route('actasEgresados.store')}}" method="POST">
        
        @csrf

        <label> Reunion:
            <br>
            <input type="number" name="reunion_id">
        </label>
        <br><br>
        <label> Junta DIrectiva:
            <br>
            <input type="number" name="junta_directiva_egresado_id">
        </label>
        <br><br>
        <label> Egresado:
            <br>
            <input type="number" name="egresado_id">
        </label>
        <br><br>
        <label> Resultado:
            <br>
            <input type="text" name="resultado_acta_egresado">
        </label>
        <br><br>
        <label> Firma:
            <br>
            <input type="text" name="firma_responsable_acta_egresado">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection