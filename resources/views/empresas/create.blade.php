@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros para cada empresa nueva</h1>

    <form action="{{route('empresas.store')}}" method="POST">
        
        @csrf

        <label> Nombre de la empresa:
            <br>
            <input type="text" name="nombre_empresa">
        </label>
        <br><br>
        <label> Representante de la empresa:
            <br>
            <input type="text" name="representante_empresa">
        </label>
        <br><br>
        <label> Celular:
            <br>
            <input type="tel" name="celular_empresa">
        </label>
        <br><br>
        <label> Direccion:
            <br>
            <input type="text" name="direccion_empresa">
        </label>
        <br><br>
        <label> Email:
            <br>
            <input type="email" name="email_empresa">
        </label>
        <br><br>
        <label> Rubro:
            <br>
            <input type="text" name="rubro_empresa">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection