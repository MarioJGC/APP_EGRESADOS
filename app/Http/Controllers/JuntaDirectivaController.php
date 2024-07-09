<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JuntaDirectaEgresados;

class JuntaDirectivaController extends Controller
{
         //metodo para la pagina principal de Actas de egresados
        public function index(){
            //usamos las sentencias de eloquent
            $juntas = JuntaDirectaEgresados::orderBy('id','desc')->paginate();
            return view("juntaDirectiva.index", compact('juntas'));
        }
        
        //metodo para crear un nuevo registro de practicante
        public function create(){
            return view("juntaDirectiva.create");
        }
    
        //metodo para almacenar datos de formulario
        public function store(Request $request){
            $junta = new JuntaDirectaEgresados();
            $junta->egresado_id = $request->egresado_id;
            $junta->tipo_cargo_id = $request->tipo_cargo_id;
            $junta->periodo_directiva = $request->periodo_directiva;
            $junta->save();
            return redirect()->route('juntaDirectiva.show',$junta);
        }


        public function show(JuntaDirectaEgresados $junta){
            return view('juntaDirectiva.show', compact('junta'));
            //compact se usa para enviar una variable a la vista
        }

        //metodo para actualizar los registros
        public function edit(JuntaDirectaEgresados $junta){
            return view('juntaDirectiva.edit', compact('junta'));
        }

        //metodo para actualizar registros
        public function update(Request $request, JuntaDirectaEgresados $junta){
            $junta->egresado_id = $request->egresado_id;
            $junta->tipo_cargo_id = $request->tipo_cargo_id;
            $junta->periodo_directiva = $request->periodo_directiva;
            $junta->save();

            return redirect()->route('juntaDirectiva.show', $junta);
        }

        public function destroy( JuntaDirectaEgresados $junta)

        {
            $junta->delete();
            return redirect()->route('juntaDirectiva.index')->with('success', 'Registro eliminado correctamente.');
        }

        
}
