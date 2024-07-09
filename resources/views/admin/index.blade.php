@extends('adminlte::page')

@section('title', 'Dashboard Administracion')

@section('content_header')
    @role('admin')
        <h1 class="text-center fw-bold">BIENVENIDO ADMIN</h1>
    @endrole

    @role('egresado')
        <h1 class="text-center fw-bold">BIENVENIDO EGRESADO</h1>
    @endrole
@stop

@section('content')

    @role('admin')
    <div class="container d-flex " style="height: 100vh;">
        <img class="img-fluid" src="{{ asset('images/img5.jpg') }}" alt="Imagen centrada">
    </div>


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <p class="lead">
                    Aquí, en este espacio virtual, encontrarás una ventana a nuestra comunidad educativa diversa y apasionada. Desde programas académicos de vanguardia hasta proyectos de investigación innovadores, desde eventos culturales inspiradores hasta colaboraciones internacionales, todo lo que hace que la Universidad Continental sea especial está a tu alcance.
                </p>
                <blockquote class="blockquote text-center">
                    <p class="mb-0">
                        Para ti, querido egresado, este portal es más que un simple conjunto de páginas web; es un recordatorio de tus años de arduo trabajo, determinación y logros. Es un tributo a tus profesores que te guiaron y a tus compañeros de clase que te inspiraron. Es una celebración de tus éxitos y un testimonio de tu potencial ilimitado.
                    </p>
                </blockquote>
                <p class="lead text-center">
                    Así que, te invitamos a explorar, aprender y revivir los momentos que han dado forma a tu viaje educativo. Únete a nosotros mientras celebramos estos 25 años de logros sobresalientes y miramos hacia el futuro con esperanza y emoción. ¡Bienvenido a casa, querido egresado de la Universidad Continental!
                </p>
            </div>
        </div>
    </div>
        
    @endrole


    @role('egresado')

    <div class="container d-flex " style="height: 100vh;">
        <img class="img-fluid" src="{{ asset('images/img5.jpg') }}" alt="Imagen centrada">
    </div>


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <p class="lead">
                    Aquí, en este espacio virtual, encontrarás una ventana a nuestra comunidad educativa diversa y apasionada. Desde programas académicos de vanguardia hasta proyectos de investigación innovadores, desde eventos culturales inspiradores hasta colaboraciones internacionales, todo lo que hace que la Universidad Continental sea especial está a tu alcance.
                </p>
                <blockquote class="blockquote text-center">
                    <p class="mb-0">
                        Para ti, querido egresado, este portal es más que un simple conjunto de páginas web; es un recordatorio de tus años de arduo trabajo, determinación y logros. Es un tributo a tus profesores que te guiaron y a tus compañeros de clase que te inspiraron. Es una celebración de tus éxitos y un testimonio de tu potencial ilimitado.
                    </p>
                </blockquote>
                <p class="lead text-center">
                    Así que, te invitamos a explorar, aprender y revivir los momentos que han dado forma a tu viaje educativo. Únete a nosotros mientras celebramos estos 25 años de logros sobresalientes y miramos hacia el futuro con esperanza y emoción. ¡Bienvenido a casa, querido egresado de la Universidad Continental!
                </p>
            </div>
        </div>
    </div>
    @endrole
@stop