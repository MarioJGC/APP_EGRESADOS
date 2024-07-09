@extends('adminlte::page')
@section('title','Trabajo: ' . $evaluacion->id)
@section('content')
    <h1>Codigo de Evaluacion: {{$evaluacion->id}}</h1>
    <a href="{{route('evaluacionTrabajo.index')}}">Volver a las evaluaciones</a>
    <br>
    <a href="{{route('evaluacionTrabajo.edit', $evaluacion)}}">Editar registro</a>
    <p><strong>Descripcion: {{$evaluacion->descripcion_evaluacion_trabajo}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('evaluacionTrabajo.destroy', $evaluacion) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')

    
@endsection