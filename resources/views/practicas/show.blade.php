@extends('adminlte::page')
@section('title','Practica: ' . $practica->titulo)
@section('content')
    <h1>Bienvenido al procedimiento: {{$practica->titulo}}</h1>
    <a href="{{route('practicas.index')}}">Volver a practicas</a>
    <br>
    <a href="{{route('practicas.edit', $practica)}}">Editar registro</a>
    <p><strong>Codigo: {{$practica->codigo}}</strong></p>

@endsection