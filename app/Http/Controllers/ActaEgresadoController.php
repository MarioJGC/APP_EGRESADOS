<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActaEgresados;

class ActaEgresadoController extends Controller
{
    public function index()
    {
        //usamos las sentencias de eloquent
        $actas = ActaEgresados::orderBy('id', 'desc')->paginate();
        return view("actasEgresados.index", compact('actas'));
    }

    public function create()
    {
        return view("actasEgresados.create");
    }

    public function store(Request $request)
    {
        $acta = new ActaEgresados();
        $acta->reunion_id = $request->reunion_id;
        $acta->junta_directiva_egresado_id = $request->junta_directiva_egresado_id;
        $acta->egresado_id = $request->egresado_id;
        $acta->resultado_acta_egresado = $request->resultado_acta_egresado;
        $acta->firma_responsable_acta_egresado = $request->firma_responsable_acta_egresado;
        $acta->save();
        return redirect()->route('actasEgresados.show', $acta);
    }

    //metodo para mostrar los detalles del registro
    public function show(ActaEgresados $acta)
    {
        return view('actasEgresados.show', compact('acta'));
    }

    public function edit(ActaEgresados $acta)
    {
        return view('actasEgresados.edit', compact('acta'));
    }

    public function update(Request $request, ActaEgresados $acta)
    {
        $acta->reunion_id = $request->reunion_id;
        $acta->junta_directiva_egresado_id = $request->junta_directiva_egresado_id;
        $acta->egresado_id = $request->egresado_id;
        $acta->resultado_acta_egresado = $request->resultado_acta_egresado;
        $acta->firma_responsable_acta_egresado = $request->firma_responsable_acta_egresado;
        $acta->save();
        return redirect()->route('actasEgresados.show', $acta);
    
    }    

    public function destroy(ActaEgresados $acta)
    {
        $acta->delete();
        return redirect()->route('actasEgresados.index')->with('success', 'Registro eliminado correctamente.');
    }
}