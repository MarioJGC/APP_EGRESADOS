<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoCargos;
class TipoCargoController extends Controller
{
            //metodo para la pagina principal de Gestion de Practicas
            public function index(){
                //usamos las sentencias de eloquent
                $tipos = TipoCargos::orderBy('id','desc')->paginate();
                return view("tipoCargos.index", compact('tipos'));
            }
        
            //metodo para crear un nuevo registro de practicante
            public function create(){
                return view("tipoCargos.create");
            }
        
            //metodo para almacenar datos de formulario
            public function store(Request $request){
                $tipo = new TipoCargos();
        
                $tipo->decripcion_cargo = $request->decripcion_cargo;
                $tipo->save();
        
                return redirect()->route('tipoCargos.show',$tipo);
            }
            public function show(TipoCargos $tipo){
                return view('tipoCargos.show', compact('tipo'));
                //compact se usa para enviar una variable a la vista
            }
        
            //metodo para actualizar los registros
            public function edit(TipoCargos $tipo){
                return view('tipoCargos.edit', compact('tipo'));
            }
        
            //metodo para actualizar registros
            public function update(Request $request, TipoCargos $tipo){
                $tipo->decripcion_cargo = $request->decripcion_cargo;
                $tipo->save();
        
                return redirect()->route('tipoCargos.show', $tipo);
            }

            public function destroy( TipoCargos $tipo)

            {
                $tipo->delete();
                return redirect()->route('tipoCargos.index')->with('success', 'Registro eliminado correctamente.');
            }
}
