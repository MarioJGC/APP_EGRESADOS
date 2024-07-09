@extends('adminlte::page')
@section('title','Requisito de egresado')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('reuniones.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($reuniones as $reunion)
            <li>
               <a href="{{route('reuniones.show', $reunion->id)}}">{{$reunion->fecha_reunion}}</a>
            </li>
        @endforeach 
    </ul>

    {{$reuniones->links()}}

@endsection