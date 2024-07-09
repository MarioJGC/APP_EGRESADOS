@extends('adminlte::page')
@section('title','Id del requsito: ' . $requisito->id)
@section('content')
<h1 style="text-align: center;">El id del requisito es: {{$requisito->id}}</h1>
<div style="display: flex; justify-content: space-between;">
<a href="{{route('requisitoEgresado.index')}}" style="padding: 10px; background-color: #4CAF50; color: white; text-decoration: none;">Volver a practicas</a>
<a href="{{route('requisitoEgresado.edit', $requisito)}}" style="padding: 10px; background-color: #4CAF50; color: white; text-decoration: none;">Editar registro</a>
</div>
<p style="margin-top: 20px;"><strong>El certificado del trabajo es: {{$requisito->certificado_egresado}}</strong></p>
<a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }" style="display: block; padding: 10px; background-color: #f44336; color: white; text-decoration: none; margin-top: 20px;">Eliminar Registro</a>
<form id="delete-form" action="{{ route('requisitoEgresado.destroy', $requisito) }}" method="POST" style="display: none;">
@csrf
@method('DELETE')
</form>
@endsection