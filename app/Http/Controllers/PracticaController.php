<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practica;

class PracticaController extends Controller
{
    //metodo para la pagina principal de Gestion de Practicas
    public function index(){
        //usamos las sentencias de eloquent
        $practicas = Practica::orderBy('id','desc')->paginate();
        return view("practicas.index", compact('practicas'));
    }


    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("practicas.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $practica = new Practica();

        $practica->codigo = $request->codigo;
        $practica->idestudiante = $request->idestudiante;
        $practica->iddocente = $request->iddocente;
        $practica->idempresa = $request->idempresa;
        $practica->idetapa = $request->idetapa;
        $practica->titulo = $request->titulo;

        $practica->save();

        return redirect()->route('practicas.show',$practica);
    }

    //metodo para mostrar los detalles del registro
    public function show(Practica $practica){
        return view('practicas.show', compact('practica'));
        //compact se usa para enviar una variable a la vista
    }

    //metodo para actualizar los registros
    public function edit(Practica $practica){
        return view('practicas.edit', compact('practica'));
    }

    //metodo para actualizar registros
    public function update(Request $request, Practica $practica){
        $practica->codigo = $request->codigo;
        $practica->idestudiante = $request->idestudiante;
        $practica->iddocente = $request->iddocente;
        $practica->idempresa = $request->idempresa;
        $practica->idetapa = $request->idetapa;
        $practica->titulo = $request->titulo;

        $practica->save();

        return redirect()->route('practicas.show', $practica);
    }

    public function destroy( Practica $practica)
 
    {
        $practica->delete();
        return redirect()->route('practicas.index')->with('success', 'Registro eliminado correctamente.');
    }
}