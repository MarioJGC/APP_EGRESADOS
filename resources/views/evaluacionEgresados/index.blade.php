@extends('adminlte::page')
@section('title','Egresados')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('evaluacionEgresados.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($evaluaciones as $evaluacion)
            <li>
               <a href="{{route('evaluacionEgresados.show', $evaluacion->id)}}">{{$evaluacion->id}}</a>
            </li>
        @endforeach 
    </ul>

    {{$evaluaciones->links()}}

@endsection