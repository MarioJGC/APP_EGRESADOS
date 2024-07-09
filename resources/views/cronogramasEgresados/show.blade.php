@extends('adminlte::page')
@section('title','Conograma del egresado con id: ' . $cronograma->numero_cronograma)
@section('content')
    <h1>Bienvenido al cronograma del egresado con id: {{$cronograma->numero_cronograma}}</h1>
    <a href="{{route('cronogramasEgresados.index')}}">Volver a cronograma</a>
    <br>
    <a href="{{route('cronogramasEgresados.edit', $cronograma)}}">Editar registro</a>
    <p><strong>Periodo: {{$cronograma->periodo_cronograma}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('cronogramasEgresados.destroy', $cronograma) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')

@endsection


