@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros</h1>

    <form action="{{route('reuniones.store')}}" method="POST">
        
        @csrf

        <label> Id del Egresado:
            <br>
            <input type="number" name="egresado_id">
        </label>
        <br><br>
        <label> Fecha de reunion:
            <br>
            <input type="datetime" name="fecha_reunion">
        </label>
        <br><br>
        <label> Lugar de reunion:
            <br>
            <input type="text" name="lugar_reunion">
        </label>
        <br><br>
        <label> Agenda:
            <br>
            <input type="text" name="agenda_reunion">
        </label>
        <br><br>
        <label> Objetivo:
            <br>
            <input type="text" name="objetivo_reunion">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection