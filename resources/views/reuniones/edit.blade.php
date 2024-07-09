@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('reuniones.update', $reunion)}}" method="POST">

        @csrf

        @method('put')


        <label> Id del Egresado:
            <br>
            <input type="number" name="egresado_id" value="{{$reunion->egresado_id}}">
        </label>
        <br><br>
        <label> Fecha de reunion:
            <br>
            <input type="datetime" name="fecha_reunion" value="{{$reunion->fecha_reunion}}">
        </label>
        <br><br>
        <label> Lugar de reunion:
            <br>
            <input type="text" name="lugar_reunion" value="{{$reunion->lugar_reunion}}">
        </label>
        <br><br>
        <label> Agenda:
            <br>
            <input type="text" name="agenda_reunion" value="{{$reunion->agenda_reunion}}">
        </label>
        <br><br>
        <label> Objetivo:
            <br>
            <input type="text" name="objetivo_reunion" value="{{$reunion->objetivo_reunion}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>
    </form>