@extends('adminlte::page')
@section('title','Nuevo Registro')

@section('content')

    <style>
    .user-form {
        max-width: 400px;
        margin: 0 auto;
    }

    .user-form h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .user-form .form-group {
        margin-bottom: 15px;
    }

    .user-form label {
        font-weight: bold;
    }

    .user-form input[type="text"],
    .user-form input[type="email"],
    .user-form input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .user-form button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    </style>

    <h1>Crear Usuario</h1>

    <form action="{{ route('usuarios.store') }}" method="POST" class="user-form">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection



