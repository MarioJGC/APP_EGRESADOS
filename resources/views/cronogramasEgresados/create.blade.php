@extends('adminlte::page')    
    h1 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"], input[type="datetime"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
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
</style>

<h1>Aqui podras crear registros para cada Cronograma de Egresados</h1>

<form action="{{route('cronogramasEgresados.store')}}" method="POST">
    
    @csrf

    <label> Numero del Cronograma:
        <br>
        <input type="text" name="numero_cronograma">
    </label>
    <br><br>
    <label> Archivo de la Actividad:
        <br>
        <input type="text" name="actividad_cronograma">
    </label>
    <br><br>
    <label> Fecha:
        <br>
        <input type="datetime" name="fecha_cronograma">
    </label>
    <br><br>
    <label> Periodo:
        <br>
        <input type="text" name="periodo_cronograma">
    </label>
    <br><br>

    <button type="submit">Enviar Formulario</button>
</form>
