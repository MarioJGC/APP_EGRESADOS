@extends('adminlte::page')
@section('title','Formto: ' . $formato->id)
@section('content')
    <h1>Codigo del formato: {{$formato->id}}</h1>
    <a href="{{route('formatoEvaluacion.index')}}">Volver a las evaluaciones</a>
    <br>
    <a href="{{route('formatoEvaluacion.edit', $formato)}}">Editar registro</a>
    <p><strong>La rubrica de evaluacion es: {{$formato->rubrica_evaluacion}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('formatoEvaluacion.destroy', $formato) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')

@endsection