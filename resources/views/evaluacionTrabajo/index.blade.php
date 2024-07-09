@extends('adminlte::page')
@section('title','Trabajo')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('evaluacionTrabajo.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($evaluacionT as $evaluacion)
            <li>
               <a href="{{route('evaluacionTrabajo.show', $evaluacion->id)}}">{{$evaluacion->descripcion_evaluacion_trabajo}}</a>
            </li> 
        @endforeach 
    </ul>

    {{$evaluacionT->links()}}

@endsection