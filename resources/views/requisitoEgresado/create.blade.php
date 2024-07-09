@extends('adminlte::page')

@section('title', 'Nuevo Registro')

@section('content')
    <h1>Aquí podrás crear registros</h1>

    <form action="{{ route('requisitoEgresado.store') }}" method="POST">
        @csrf

        <label for="egresado_id">Id del Egresado:</label>
        <br>
        <input type="number" id="egresado_id" name="egresado_id">
        <br><br>

        <label for="estado_estudiante_id">Estado del estudiante:</label>
        <br>
        <input type="number" id="estado_estudiante_id" name="estado_estudiante_id">
        <br><br>

        <label for="solicitud_decano_egresado">Solicitud:</label>
        <br>
        <input type="text" id="solicitud_decano_egresado" name="solicitud_decano_egresado">
        <br><br>

        <label for="recibo_dt_egresado">Recibo:</label>
        <br>
        <input type="text" id="recibo_dt_egresado" name="recibo_dt_egresado">
        <br><br>

        <label for="certificado_egresado">Certificado del egresado:</label>
        <br>
        <input type="text" id="certificado_egresado" name="certificado_egresado">
        <br><br>

        <label for="fotografia_egresado">Fotografía:</label>
        <br>
        <input type="text" id="fotografia_egresado" name="fotografia_egresado">
        <br><br>

        <label for="certificado_ofimatica_egresado">Certificado de ofimática:</label>
        <br>
        <input type="text" id="certificado_ofimatica_egresado" name="certificado_ofimatica_egresado">
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

    <style>
        form {
            margin: 0 auto;
            max-width: 500px;
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 16px;
            font-size: 16px;
        }

        label {
            font-size: 20px;
            font-weight: bold;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 32px;
        }
    </style>
@endsection
