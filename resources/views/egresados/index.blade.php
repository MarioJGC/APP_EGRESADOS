@extends('adminlte::page')
@section('title', 'Egresados')
@section('content')

@role('admin')

<h1 class="text-center" style="font-family:verdana;">DATOS ACADÉMICOS DE LOS EGRESADOS</h1>
<a href="{{ route('egresados.create') }}" class="btn btn-secondary mb-3">Registrar Egresado</a>

@if (count($egresados) > 0)
    <div class="container">
        <table class="table">
            <thead>
                <tr class="table-secondary">
                    <th scope="col">Nombre</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Publicaciones academicas</th>
                    <th scope="col">P. Exito</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($egresados as $egresado)
                    <tr>
                        <td>{{ $egresado->nombre_egresado }}</td>
                        <td>{{ $egresado->especializacion_egresado }}</td>
                        <td class="text-center">{{ $egresado->publicaciones_academicas }}</td>
                        <td>
                            @if ($egresado->success)
                                Alta
                            @else
                                Baja
                            @endif
                        </td>
                        <td>    
                            <a href="{{ route('egresados.show', $egresado->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('egresados.edit', $egresado->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('egresados.destroy', $egresado->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este egresado?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endrole

@role('egresado')

@endrole

@endsection
