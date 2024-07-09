@extends('adminlte::page')
@section('title','Acta del egresado con id: ' . $acta->id)

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            background-color: #f5f5f5;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }

        .button {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .button-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .button-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>

    <h1>Bienvenido al acta del egresado con id: {{$acta->id}}</h1>
    <a class="button" href="{{route('actasEgresados.index')}}">Volver a practicas</a>
    <br>    
    <a class="button" href="{{route('actasEgresados.edit', $acta)}}">Editar registro</a>
    <p><strong>Resultado: {{$acta->resultado_acta_egresado}}</strong></p>

    <a class="button button-danger" href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('actasEgresados.destroy', $acta) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection



    