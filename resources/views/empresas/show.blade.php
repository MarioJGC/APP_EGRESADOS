@extends('adminlte::page')
@section('title','Empresa: ' . $empresa->nombre_empresa)
@section('content')
    <h1>Empresa: {{$empresa->nombre_empresa}}</h1>
    <a href="{{route('empresas.index')}}">Volver a practicas</a>
    <br>
    <a href="{{route('empresas.edit', $empresa)}}">Editar registro</a>
    <p><strong>El representante de la empresa es: {{$empresa->representante_empresa}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('empresas.destroy', $empresa) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')

@endsection


