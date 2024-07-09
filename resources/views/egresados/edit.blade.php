@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')
<div class="container">
    <h1 class="text-center" style="font-family:verdana;">EDICIÓN DE EGRESADO</h1>
    <form action="{{route('egresados.update', $egresado)}}" method="POST">

        @csrf

        @method('put')

        <div class="form-group">
            <label for="nombre_egresado">Nombre:</label>
            <input type="text" class="form-control" id="nombre_egresado" name="nombre_egresado" value="{{ $egresado->nombre_egresado }}">
        </div>

        <div class="form-group">
            <label for="grado_instruccion_egresado">Grado de Instrucción:</label>
            <input type="text" class="form-control" id="grado_instruccion_egresado" name="grado_instruccion_egresado" value="{{ $egresado->grado_instruccion_egresado }}">
        </div>

        <div class="form-group">
            <label for="especializacion_egresado">Especialización:</label>
            <input type="text" class="form-control" id="especializacion_egresado" name="especializacion_egresado" value="{{ $egresado->especializacion_egresado }}">
        </div>



















        <div class="form-group">
            <label for="edad_al_egresar">Edad al egresar:</label>
            <input type="number" class="form-control" id="edad_al_egresar" name="edad_al_egresar" value="{{ $egresado->edad_al_egresar}}">
        </div>

        <div class="form-group">
            <label for="publicaciones_academicas">N° de publicaciones academicas:</label>
            <input type="number" class="form-control" id="publicaciones_academicas" name="publicaciones_academicas" value="{{$egresado->publicaciones_academicas}}">
        </div>

        <div class="form-group">
            <label for="puntaje_certificacion">Puntaje de certificación:</label>
            <input type="number" class="form-control" id="puntaje_certificacion" name="puntaje_certificacion" value="{{$egresado->puntaje_certificacion}}">
        </div>

        <div class="form-group">
            <label for="num_idiomas_hablados">N° de idiomas:</label>
            <input type="number" class="form-control" id="num_idiomas_hablados" name="num_idiomas_hablados" value="{{$egresado->num_idiomas_hablados}}">
        </div>

        <div class="form-group">
            <label for="proyectos_investigacion">N° de proyectos de investigación:</label>
            <input type="number" class="form-control" id="proyectos_investigacion" name="proyectos_investigacion" value="{{$egresado->proyectos_investigacion}}">
        </div>
        <div class="form-group">
            <label for="habilidades_certificadas">N° de habilidades certificadas:</label>
            <input type="number" class="form-control" id="num_idiomas_hablados" name="habilidades_certificadas" value="{{$egresado->habilidades_certificadas}}">
        </div>
        <div class="form-group">
            <label for="sueldo_actual">N° de sueldo actual:</label>
            <input type="number" class="form-control" id="sueldo_actual" name="sueldo_actual" value="{{$egresado->sueldo_actual}}">
        </div>































        <div class="form-group">
            <label for="empresa_id">Id de empresa:</label>
            <input type="number" class="form-control" id="empresa_id" name="empresa_id" value="{{$egresado->empresa_id}}">
        </div>


        <div class="form-group">
            <label for="cargo_empresa_egresado">Cargo de empresa:</label>
            <input type="text" class="form-control" id="cargo_empresa_egresado" name="cargo_empresa_egresado" value="{{$egresado->cargo_empresa_egresado}}">
        </div>


        <div class="form-group">
            <label for="tiempo_laboral_egresado">Tiempo laboral:</label>
            <input type="number" class="form-control" id="tiempo_laboral_egresado" name="tiempo_laboral_egresado" value="{{$egresado->tiempo_laboral_egresado}}">
        </div>

        
        <button type="submit" class="btn btn-primary">Actualizar Formulario</button>
    </form>
    
</div>
@endsection