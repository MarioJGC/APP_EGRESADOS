@extends('adminlte::page')
@section('title','Home')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('actasEgresados.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($actas as $acta)
            <li>
               <a href="{{route('actasEgresados.show', $acta->id)}}">{{$acta->id}}</a>
            </li>
        @endforeach 
    </ul>

    {{$actas->links()}}

@endsection