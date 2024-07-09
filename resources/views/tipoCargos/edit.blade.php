@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('tipoCargos.update', $tipo)}}" method="POST">

        @csrf

        @method('put')

        <label> Descripcion del Cargo:
            <br>
            <input type="text" name="decripcion_cargo" value="{{$tipo->decripcion_cargo}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>
    </form>