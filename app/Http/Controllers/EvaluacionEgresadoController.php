<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluacionEgresados;

class EvaluacionEgresadoController extends Controller
{
     //metodo para la pagina principal de Actas de egresados
    public function index(){
        //usamos las sentencias de eloquent
        $evaluaciones = EvaluacionEgresados::orderBy('id','desc')->paginate();
        return view("evaluacionEgresados.index", compact('evaluaciones'));
    }
    
    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("evaluacionEgresados.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $evaluacion  = new EvaluacionEgresados();

        $evaluacion->empresa_id = $request->empresa_id;
        $evaluacion->formato_tipo_evaluacion_id = $request->formato_tipo_evaluacion_id;
        $evaluacion->save();
        return redirect()->route('evaluacionEgresados.show',$evaluacion);
    }

    public function show(EvaluacionEgresados $evaluacion){
        return view('evaluacionEgresados.show', compact('evaluacion'));
        //compact se usa para enviar una variable a la vista
    }

    //metodo para actualizar los registros
    public function edit(EvaluacionEgresados $evaluacion){
        return view('evaluacionEgresados.edit', compact('evaluacion'));
    }

    //metodo para actualizar registros
    public function update(Request $request, EvaluacionEgresados $evaluacion){
        $evaluacion->empresa_id = $request->empresa_id;
        $evaluacion->formato_tipo_evaluacion_id = $request->formato_tipo_evaluacion_id;
        $evaluacion->save();
        return redirect()->route('evaluacionEgresados.show', $evaluacion);
    }

    public function destroy( EvaluacionEgresados $evaluacion)

    {
        $evaluacion->delete();
        return redirect()->route('evaluacionEgresados.index')->with('success', 'Registro eliminado correctamente.');
    }
}