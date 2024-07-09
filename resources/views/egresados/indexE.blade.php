@extends('adminlte::page')
@section('title', 'Egresado')
@section('content')
    @role('egresado')
        @if($egresado)
        <h1 class="text-center" style="font-family:verdana;">MIS DATOS PERSONALES</h1>

                <div class="card ">
                    <div class="card-header">
                        <h4>Nombre Completo :</h4>
                    </div>
                    <div class="card-body" style="height: 120px; overflow-y: auto;">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $egresado->nombre_egresado }}</p>
                        </blockquote>
                    </div>
                </div> 

                <div class="card">
                <div class="card-header">
                        <h4>Email :</h4>
                    </div>
                    <div class="card-body" style="height: 120px; overflow-y: auto;">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $egresado->email }}</p>
                        </blockquote>
                    </div>
                </div>
                <div class="card">
                <div class="card-header">
                        <h4>Grado de Instrucción :</h4>
                    </div>
                    <div class="card-body" style="height: 120px; overflow-y: auto;">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $egresado->grado_instruccion_egresado }}</p>
                        </blockquote>
                    </div>
                </div>
                <div class="card">
                <div class="card-header">
                        <h4>Especialización :</h4>
                    </div>
                    <div class="card-body" style="height: 120px; overflow-y: auto;">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $egresado->especializacion_egresado }}</p>
                        </blockquote>
                    </div>
                </div>


                <div class="card">
                <div class="card-header">
                        <h4>Edad Egresado:</h4>
                    </div>
                    <div class="card-body" style="height: 120px; overflow-y: auto;">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $egresado->edad_al_egresar}}</p>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                <div class="card-header">
                        <h4>Cargo empresa :</h4>
                    </div>
                    <div class="card-body" style="height: 120px; overflow-y: auto;">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $egresado->cargo_empresa_egresado }}</p>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                <div class="card-header">
                        <h4>Tiempo Laboral :</h4>
                    </div>
                    <div class="card-body" style="height: 120px; overflow-y: auto;">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $egresado->tiempo_laboral_egresado }}</p>
                        </blockquote>
                    </div>
                </div>
        @endif
        <a href="{{ route('egresados.edit', $egresado->id) }}" class="btn btn-primary">Actualizar Datos</a>
    @endrole

    @role('admin')
        <h1 class="text-center" style="font-family:verdana;">¡ESTA VISTA ES SOLO PARA EGRESADOS!</h1>
    @endrole

@endsection