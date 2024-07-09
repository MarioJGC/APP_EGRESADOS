@extends('adminlte::page')
@section('title','Id de la reunion: ' . $reunion->id)
@section('content')
    <h1>El id de la reunion es: {{$reunion->id}}</h1>
    <a href="{{route('reuniones.index')}}">Volver a practicas</a>
    <br>
    <a href="{{route('reuniones.edit', $reunion)}}">Editar registro</a>
    <p><strong>El lugar de la reunion es: {{$reunion->lugar_reunion}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('reuniones.destroy', $reunion) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
@endsection