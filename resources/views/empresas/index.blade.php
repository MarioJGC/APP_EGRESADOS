@extends('adminlte::page')
@section('title','Empresas')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('empresas.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($empresas as $empresa)
            <li>
               <a href="{{route('empresas.show', $empresa->id)}}">{{$empresa->id}}</a>
            </li>
        @endforeach 
    </ul>

    {{$empresas->links()}}

@endsection