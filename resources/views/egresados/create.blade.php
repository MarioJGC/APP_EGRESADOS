@extends('adminlte::page')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros para cada Cronograma de Egresados</h1>

    <form action="{{route('egresados.store')}}" method="POST">
        
        @csrf

        <label> Nombre completo del egresado:
            <br>
            <input type="text" name="nombre_egresado">
        </label>
        <br><br>
        <label> Grado de instruccion:
            <br>
            <input type="text" name="grado_instruccion_egresado">
        </label>
        <br><br>
        <label> Especializacion:
            <br>
            <input type="text" name="especializacion_egresado">
        </label>





        <br><br>
        <label> Edad al egresar:
            <br>
            <input type="number" name="edad_al_egresar">
        </label>
        <br><br>
        <label> N° publicaciones academicas:
            <br>
            <input type="number" name="publicaciones_academicas">
        </label>
        <br><br>
        <label> Puntaje de certificación:
            <br>
            <input type="number" name="puntaje_certificacion">
        </label>
        <br><br>
        <label> N° de idiomas:
            <br>
            <input type="number" name="num_idiomas_hablados">
        </label>
        <br><br>
        <label> N° proyectos de investigación:
            <br>
            <input type="number" name="proyectos_investigacion">
        </label>
        <br><br>
        <label> N° habilidades certificadas:
            <br>
            <input type="number" name="habilidades_certificadas">
        </label>
        <br><br>
        <label> N° sueldo actual:
            <br>
            <input type="number" name="sueldo_actual">
        </label>



        <br><br>
        <label> Empresa donde labora:
            <br>
            <input type="number" name="empresa_id">
        </label>
        <br><br>
        <label> Cargo en la empresa:
            <br>
            <input type="text" name="cargo_empresa_egresado">
        </label>
        <br><br>
        <label> Tiempo que labora:
            <br>
            <input type="number" name="tiempo_laboral_egresado">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection