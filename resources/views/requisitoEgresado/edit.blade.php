@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('requisitoEgresado.update', $requisito)}}" method="POST">

        @csrf

        @method('put')

        <label> Id del Egresado:
            <br>
            <input type="number" name="egresado_id" value="{{$requisito->egresado_id}}">
        </label>
        <br><br>
        <label> Estado del estudiate:
            <br>
            <input type="number" name="estado_estudiante_id"  value="{{$requisito->estado_estudiante_id}}">
        </label>
        <br><br>
        <label> Solicitud:
            <br>
            <input type="text" name="solicitud_decano_egresado"  value="{{$requisito->solicitud_decano_egresado}}">
        </label>
        <br><br>
        <label> Recibo:
            <br>
            <input type="text" name="recibo_dt_egresado"  value="{{$requisito->recibo_dt_egresado}}">
        </label>
        <br><br>
        <label> Certificado del egresado:
            <br>
            <input type="text" name="certificado_egresado"  value="{{$requisito->certificado_egresado}}">
        </label>
        <br><br>
        <label> Fotografia:
            <br>
            <input type="text" name="fotografia_egresado"  value="{{$requisito->fotografia_egresado}}">
        </label>
        <br><br>
        <label> Certificado de ofimatica:
            <br>
            <input type="text" name="certificado_ofimatica_egresado"  value="{{$requisito->certificado_ofimatica_egresado}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>
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