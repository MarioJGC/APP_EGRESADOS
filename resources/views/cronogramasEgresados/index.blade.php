@extends('adminlte::page')
@section('title','Cronograma')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('cronogramasEgresados.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($cronogramas as $cronograma)
            <li>
               <a href="{{route('cronogramasEgresados.show', $cronograma->id)}}">{{$cronograma->id}}</a>
            </li>
        @endforeach 
    </ul>
    
    {{$cronogramas->links()}}

@endsection