@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros</h1>

    <form action="{{route('tipoCargos.store')}}" method="POST">
        
        @csrf

        <label> Descripcion del Cargo:
            <br>
            <input type="text" name="decripcion_cargo">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection