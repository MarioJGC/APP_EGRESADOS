@extends('adminlte::page')
@section('title','Empresa: ' . $evaluacion->id)
@section('content')
    <h1>Codigo de Evaluacion: {{$evaluacion->id}}</h1>
    <a href="{{route('evaluacionEgresados.index')}}">Volver a evaluaciones</a>
    <br>
    <a href="{{route('evaluacionEgresados.edit', $evaluacion)}}">Editar registro</a>
    <p><strong>Tendra un formato con codigo: {{$evaluacion->formato_tipo_evaluacion_id}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('evaluacionEgresados.destroy', $evaluacion) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')

@endsection


