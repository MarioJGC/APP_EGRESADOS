<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormatosTiposEvaluaciones;

class FormatoEvaluacionController extends Controller
{
     //metodo para la pagina principal de Actas de egresados
    public function index(){
        //usamos las sentencias de eloquent
        $formatos = FormatosTiposEvaluaciones::orderBy('id','desc')->paginate();
        return view("formatoEvaluacion.index", compact('formatos'));
    }
    
    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("formatoEvaluacion.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $formato  = new FormatosTiposEvaluaciones();
        $formato->rubrica_evaluacion = $request->rubrica_evaluacion;
        $formato->resultado_evaluacion = $request->resultado_evaluacion;
        $formato->periodo_evaluacion = $request->periodo_evaluacion;
        $formato->save();
        return redirect()->route('formatoEvaluacion.show',$formato);
    }

    public function show(FormatosTiposEvaluaciones $formato){
        return view('formatoEvaluacion.show', compact('formato'));
        //compact se usa para enviar una variable a la vista
    }

    //metodo para actualizar los registros
    public function edit(FormatosTiposEvaluaciones $formato){
        return view('formatoEvaluacion.edit', compact('formato'));
    }

    //metodo para actualizar registros
    public function update(Request $request, FormatosTiposEvaluaciones $formato){
        $formato->rubrica_evaluacion = $request->rubrica_evaluacion;
        $formato->resultado_evaluacion = $request->resultado_evaluacion;
        $formato->periodo_evaluacion = $request->periodo_evaluacion;
        $formato->save();

        return redirect()->route('formatoEvaluacion.show', $formato);
    }

    public function destroy( FormatosTiposEvaluaciones $formato)

    {
        $formato->delete();
        return redirect()->route('formatoEvaluacion.index')->with('success', 'Registro eliminado correctamente.');
    }
}
