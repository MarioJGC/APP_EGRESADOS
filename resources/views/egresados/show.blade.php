@extends('adminlte::page')
@section('title','Bienvenido: ' . $egresado->nombre_egresado)
@section('content')
    <h1>Bienvenido : {{$egresado->nombre_egresado}}</h1>
    <a href="{{route('egresados.index')}}">Volver a practicas</a>
    <br>
    <a href="{{route('egresados.edit', $egresado)}}">Editar registro</a>
    <p><strong>Su cargo en su empresa es: {{$egresado->cargo_empresa_egresado}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('egresados.destroy', $egresado) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')


@endsection


