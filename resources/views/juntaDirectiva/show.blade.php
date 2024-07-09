@extends('adminlte::page')
@section('title','Junta directiva: ' . $junta->id )
@section('content')
    <h1>Codigo del egresado: {{$junta->egresado_id}}</h1>
    <a href="{{route('juntaDirectiva.index')}}">Volver a las evaluaciones</a>
    <br>
    <a href="{{route('juntaDirectiva.edit', $junta)}}">Editar registro</a>
    <p><strong>El periodo es: {{$junta->periodo_directiva}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('juntaDirectiva.destroy', $junta) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')

@endsection