@extends('adminlte::page')
@section('title','Indice de Usuarios')
@section('content')
    @role('admin')
        <h1 class="text-center" style="font-family:verdana;">Gestión de Egresados</h1>
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>

        @if (count($users) > 0)

        <div class="container">
        <table class="table">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('usuarios.show', $user->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        </div>

        @else
            <p>No hay usuarios registrados.</p>
        @endif
    @endrole
    @role('egresado')
        <h1 class="text-center" style="font-family:verdana;">¡USTED NO CUENTA CON PERMISO DE ADMINISTRADOR!</h1>
    @endrole
@endsection