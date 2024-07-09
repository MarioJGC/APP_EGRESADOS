@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros</h1>

    <form action="{{route('practicas.store')}}" method="POST">
        
        @csrf

        <label> Codigo:
            <br>
            <input type="number" name="codigo">
        </label>
        <br><br>
        <label> Estudiante:
            <br>
            <input type="number" name="idestudiante">
        </label>
        <br><br>
        <label> Docente:
            <br>
            <input type="number" name="iddocente">
        </label>
        <br><br>
        <label> Empresa:
            <br>
            <input type="number" name="idempresa">
        </label>
        <br><br>
        <label> Etapa:
            <br>
            <input type="number" name="idetapa">
        </label>
        <br><br>
        <label> Titulo:
            <br>
            <textarea name="titulo" rows="5"></textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection