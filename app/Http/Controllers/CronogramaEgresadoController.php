<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CronogramaEgresados;

class CronogramaEgresadoController extends Controller
{
        //metodo para la pagina principal de Actas de egresados
        public function index(){
            //usamos las sentencias de eloquent
            $cronogramas = CronogramaEgresados::orderBy('id','desc')->paginate();
            return view("cronogramasEgresados.index", compact('cronogramas'));
        }
        
        //metodo para crear un nuevo registro de practicante
        public function create(){
            return view("cronogramasEgresados.create");
        }
    
        //metodo para almacenar datos de formulario
        public function store(Request $request){
            $cronograma = new CronogramaEgresados();
    
            $cronograma->numero_cronograma = $request->numero_cronograma;
            $cronograma->actividad_cronograma = $request->actividad_cronograma;
            $cronograma->fecha_cronograma = $request->fecha_cronograma;
            $cronograma->periodo_cronograma = $request->periodo_cronograma;
            $cronograma->save();
            return redirect()->route('cronogramasEgresados.show',$cronograma);
        }
    
        //metodo para mostrar los detalles del registro
        public function show(CronogramaEgresados $cronograma){
            return view('cronogramasEgresados.show', compact('cronograma'));
            //compact se usa para enviar una variable a la vista
        }

        public function edit(CronogramaEgresados $cronograma){
            return view('cronogramasEgresados.edit', compact('cronograma'));
        }

        public function update(Request $request, CronogramaEgresados $cronograma){
            $cronograma->numero_cronograma = $request->numero_cronograma;
            $cronograma->actividad_cronograma = $request->actividad_cronograma;
            $cronograma->fecha_cronograma = $request->fecha_cronograma;
            $cronograma->periodo_cronograma = $request->periodo_cronograma;
            $cronograma->save();

            return redirect()->route('cronogramasEgresados.show', $cronograma);
        }

        public function destroy(CronogramaEgresados $cronograma)
        {
            $cronograma->delete();
            return redirect()->route('cronogramasEgresados.index')->with('success', 'Registro eliminado correctamente.');
        }

}
