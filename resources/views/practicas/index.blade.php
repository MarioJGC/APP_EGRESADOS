@extends('adminlte::page')
@section('title','Home')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('practicas.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($practicas as $practica)
            <li>
               <a href="{{route('practicas.show', $practica->id)}}">{{$practica->titulo}}</a>
            </li>
        @endforeach 
    </ul>

    {{$practicas->links()}}

@endsection