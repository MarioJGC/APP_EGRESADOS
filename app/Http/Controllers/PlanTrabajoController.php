<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanTrabajos;

class PlanTrabajoController extends Controller
{
     //metodo para la pagina principal de Actas de egresados
    public function index(){
        //usamos las sentencias de eloquent
        $planes = PlanTrabajos::orderBy('id','desc')->paginate();
        return view("planTrabajo.index", compact('planes'));
    }
    
    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("planTrabajo.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $plan = new PlanTrabajos();
        $plan->cronograma_egresado_id = $request->cronograma_egresado_id;
        $plan->evaluacion_trabajos_id = $request->evaluacion_trabajos_id;
        $plan->egresado_id = $request->egresado_id;
        $plan->informe_plan_trabajo = $request->informe_plan_trabajo;
        $plan->save();
        return redirect()->route('planTrabajo.show',$plan);
    }
    
    public function show(PlanTrabajos $plan){
        return view('planTrabajo.show', compact('plan'));
        //compact se usa para enviar una variable a la vista
    }

    //metodo para actualizar los registros
    public function edit(PlanTrabajos $plan){
        return view('planTrabajo.edit', compact('plan'));
    }

    //metodo para actualizar registros
    public function update(Request $request, PlanTrabajos $plan){
        $plan->cronograma_egresado_id = $request->cronograma_egresado_id;
        $plan->evaluacion_trabajos_id = $request->evaluacion_trabajos_id;
        $plan->egresado_id = $request->egresado_id;
        $plan->informe_plan_trabajo = $request->informe_plan_trabajo;
        $plan->save();

        return redirect()->route('planTrabajo.show', $plan);
    }

    public function destroy( PlanTrabajos $plan)
 
    {
        $plan->delete();
        return redirect()->route('planTrabajo.index')->with('success', 'Registro eliminado correctamente.');
    }
}

