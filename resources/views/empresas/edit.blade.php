@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('empresas.update', $empresa)}}" method="POST">

        @csrf

        @method('put')

        <label> Codigo:
            <br>
            <input type="text" name="nombre_empresa" value="{{$empresa->nombre_empresa}}">
        </label>
        <br><br>
        <label> Estudiante:
            <br>
            <input type="text" name="representante_empresa" value="{{$empresa->representante_empresa}}">
        </label>
        <br><br>
        <label> Docente:
            <br>
            <input type="tel" name="celular_empresa" value="{{$empresa->celular_empresa}}">
        </label>
        <br><br>
        <label> Empresa:
            <br>
            <input type="text" name="direccion_empresa" value="{{$empresa->direccion_empresa}}">
        </label>
        <br><br>
        <label> Etapa:
            <br>
            <input type="email" name="email_empresa" value="{{$empresa->email_empresa}}">
        </label>
        <br><br>

        <label> Etapa:
            <br>
            <input type="text" name="rubro_empresa" value="{{$empresa->rubro_empresa}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>
    </form>