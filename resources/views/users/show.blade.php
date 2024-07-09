@extends('adminlte::page')
@section('title','Detalles del usuario')

@section('content')

    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }

        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #45a049;
        }

    </style>
    <div class="container">
        <h1 class="title">Detalles del Usuario</h1>

        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>

        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection
