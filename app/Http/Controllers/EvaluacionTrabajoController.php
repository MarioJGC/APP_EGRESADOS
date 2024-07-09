<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluacionTrabajos;

class EvaluacionTrabajoController extends Controller
{
         //metodo para la pagina principal de Actas de egresados
        public function index(){
            //usamos las sentencias de eloquent
            $evaluacionT = EvaluacionTrabajos::orderBy('id','desc')->paginate();
            return view("evaluacionTrabajo.index", compact('evaluacionT'));
        }
        
        //metodo para crear un nuevo registro de practicante
        public function create(){
            return view("evaluacionTrabajo.create");
        }
    
        //metodo para almacenar datos de formulario
        public function store(Request $request){
            $evaluacionT  = new EvaluacionTrabajos();
            $evaluacionT->descripcion_evaluacion_trabajo = $request->descripcion_evaluacion_trabajo;
            $evaluacionT->porcentaje_avance_evaluacion_trabajo = $request->porcentaje_avance_evaluacion_trabajo;
            $evaluacionT->save();
            return redirect()->route('evaluacionTrabajo.show',$evaluacionT);
        }

        public function show(EvaluacionTrabajos $evaluacion){
            return view('evaluacionTrabajo.show', compact('evaluacion'));
            //compact se usa para enviar una variable a la vista
        }
    
        //metodo para actualizar los registros
        public function edit(EvaluacionTrabajos $evaluacion){
            return view('evaluacionTrabajo.edit', compact('evaluacion'));
        }
    
        //metodo para actualizar registros
        public function update(Request $request, EvaluacionTrabajos $evaluacion){
            $evaluacion->descripcion_evaluacion_trabajo = $request->descripcion_evaluacion_trabajo;
            $evaluacion->porcentaje_avance_evaluacion_trabajo = $request->porcentaje_avance_evaluacion_trabajo;
            $evaluacion->save();
    
            return redirect()->route('evaluacionTrabajo.show', $evaluacion);
        }

        public function destroy( EvaluacionTrabajos $evaluacion)

        {
            $evaluacion->delete();
            return redirect()->route('evaluacionTrabajo.index')->with('success', 'Registro eliminado correctamente.');
        }
}
