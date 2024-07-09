<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresaController extends Controller
{
        //metodo para la pagina principal de Actas de egresados
        public function index(){
            //usamos las sentencias de eloquent
            $empresas = Empresas::orderBy('id','desc')->paginate();
            return view("empresas.index", compact('empresas'));
        }
        
        //metodo para crear un nuevo registro de practicante
        public function create(){
            return view("empresas.create");
        }
    
        //metodo para almacenar datos de formulario
        public function store(Request $request){
            $empresa  = new Empresas();
    
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->representante_empresa = $request->representante_empresa;
            $empresa->celular_empresa = $request->celular_empresa;
            $empresa->direccion_empresa = $request->direccion_empresa;
            $empresa->email_empresa = $request->email_empresa;
            $empresa->rubro_empresa = $request->rubro_empresa;
            
            $empresa->save();
            return redirect()->route('empresas.show',$empresa);
        }
    
        //metodo para mostrar los detalles del registro

        public function show(Empresas $empresa){
            return view('empresas.show', compact('empresa'));
            //compact se usa para enviar una variable a la vista
        }
    
        //metodo para actualizar los registros
        public function edit(Empresas $empresa){
            return view('empresas.edit', compact('empresa'));
        }
    
        //metodo para actualizar registros
        public function update(Request $request, Empresas $empresa){
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->representante_empresa = $request->representante_empresa;
            $empresa->celular_empresa = $request->celular_empresa;
            $empresa->direccion_empresa = $request->direccion_empresa;
            $empresa->email_empresa = $request->email_empresa;
            $empresa->rubro_empresa = $request->rubro_empresa;
            
            $empresa->save();
    
            return redirect()->route('empresas.show', $empresa);
        }


        public function destroy( Empresas $empresa)

        {
            $empresa->delete();
            return redirect()->route('empresas.index')->with('success', 'Registro eliminado correctamente.');
        }
}
