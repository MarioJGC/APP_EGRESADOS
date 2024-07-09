@extends('adminlte::page')
@section('title','Id del plan: ' . $plan->cronograma_egresado_id)
@section('content')
    <h1>El id del plan de trabajo es: {{$plan->cronograma_egresado_id}}</h1>
    <a href="{{route('planTrabajo.index')}}">Volver a practicas</a>
    <br>
    <a href="{{route('planTrabajo.edit', $plan)}}">Editar registro</a>
    <p><strong>El informe de plan de trbajo es: {{$plan->informe_plan_trabajo}}</strong></p>

    <a href="#" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('delete-form').submit(); }">Eliminar Registro</a>
    <form id="delete-form" action="{{ route('planTrabajo.destroy', $plan) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')

@endsection