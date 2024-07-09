@extends('adminlte::page')
@section('title','Requisito de egresado')
@section('content')
    <h1 style="text-align: center;">Bienvenido a la pagina principal</h1>

    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr>
                <th>Certificado de Egresado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requisitos as $requisito)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;"><a href="{{route('requisitoEgresado.show', $requisito->id)}}" class="button button-primary">{{$requisito->certificado_egresado}}</a></td>
            </tr>
            @endforeach 
        </tbody>
    </table>

    <br>

    <a href="{{route('requisitoEgresado.create')}}" class="button button-primary" style="display: block; width: 150px; margin: auto;">Nuevo Registro</a>

    {{$requisitos->links()}}

@endsection
