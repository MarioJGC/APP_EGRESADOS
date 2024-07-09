<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequisitosEgresados;

class RequisitoEgresadoController extends Controller
{
    //metodo para la pagina principal de Gestion de Practicas
    public function index(){
        //usamos las sentencias de eloquent
        $requisitos = RequisitosEgresados::orderBy('id','desc')->paginate();
        return view("requisitoEgresado.index", compact('requisitos'));
    }


    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("requisitoEgresado.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $requisito = new RequisitosEgresados();

        $requisito->egresado_id = $request->egresado_id;
        $requisito->estado_estudiante_id = $request->estado_estudiante_id;
        $requisito->solicitud_decano_egresado = $request->solicitud_decano_egresado;
        $requisito->recibo_dt_egresado = $request->recibo_dt_egresado;
        $requisito->certificado_egresado = $request->certificado_egresado;
        $requisito->fotografia_egresado = $request->fotografia_egresado;
        $requisito->certificado_ofimatica_egresado = $request->certificado_ofimatica_egresado;
        $requisito->save();

        return redirect()->route('requisitoEgresado.show',$requisito);
    }

    public function show(RequisitosEgresados $requisito){
        return view('requisitoEgresado.show', compact('requisito'));
    }

    public function edit(RequisitosEgresados $requisito){
        return view('requisitoEgresado.edit', compact('requisito'));
    }

    //metodo para actualizar registros
    public function update(Request $request, RequisitosEgresados $requisito){
        $requisito->egresado_id = $request->egresado_id;
        $requisito->estado_estudiante_id = $request->estado_estudiante_id;
        $requisito->solicitud_decano_egresado = $request->solicitud_decano_egresado;
        $requisito->recibo_dt_egresado = $request->recibo_dt_egresado;
        $requisito->certificado_egresado = $request->certificado_egresado;
        $requisito->fotografia_egresado = $request->fotografia_egresado;
        $requisito->certificado_ofimatica_egresado = $request->certificado_ofimatica_egresado;
        $requisito->save();

        return redirect()->route('requisitoEgresado.show', $requisito);
    }

    public function destroy( RequisitosEgresados $requisito)
    {
        $requisito->delete();
        return redirect()->route('requisitoEgresado.index')->with('success', 'Registro eliminado correctamente.');
    }    
}
