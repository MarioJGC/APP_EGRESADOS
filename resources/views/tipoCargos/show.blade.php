@extends('adminlte::page')
@section('title','Id del cargo: ' . $tipo->id)
@section('content')
    <h1>El id del tipo de cargo es: {{$tipo->id }}</h1>
    <a href="{{route('tipoCargos.index')}}">Volver a practicas</a>
    <br>
    <a href="{{route('tipoCargos.edit', $tipo)}}">Editar registro</a>
    <p><strong>La descripcion del cargo es: {{$tipo->decripcion_cargo}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('tipoCargos.destroy', $tipo) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')

@endsection