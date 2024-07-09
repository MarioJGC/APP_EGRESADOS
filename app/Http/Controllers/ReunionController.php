<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reuniones;

class ReunionController extends Controller
{
        public function index(){
            //usamos las sentencias de eloquent
            $reuniones = Reuniones::orderBy('id','desc')->paginate();
            return view("reuniones.index", compact('reuniones'));
        }
        public function create(){
            return view("reuniones.create");
        }
        //metodo para almacenar datos de formulario
        public function store(Request $request){
            $reunion = new Reuniones();
            $reunion->egresado_id = $request->egresado_id;
            $reunion->fecha_reunion = $request->fecha_reunion;
            $reunion->lugar_reunion = $request->lugar_reunion;
            $reunion->agenda_reunion = $request->agenda_reunion;
            $reunion->objetivo_reunion = $request->objetivo_reunion;
            $reunion->save();
            return redirect()->route('reuniones.show',$reunion);
        }
        public function show(Reuniones $reunion){
            return view('reuniones.show', compact('reunion'));
        }
        public function edit(Reuniones $reunion){
            return view('reuniones.edit', compact('reunion'));
        }
        public function update(Request $request, Reuniones $reunion){
            $reunion->egresado_id = $request->egresado_id;
            $reunion->fecha_reunion = $request->fecha_reunion;
            $reunion->lugar_reunion = $request->lugar_reunion;
            $reunion->agenda_reunion = $request->agenda_reunion;
            $reunion->objetivo_reunion = $request->objetivo_reunion;
            $reunion->save();
            return redirect()->route('reuniones.show', $reunion);
        }

        public function destroy( Reuniones $reunion)
        {
            $reunion->delete();
            return redirect()->route('reuniones.index')->with('success', 'Registro eliminado correctamente.');
        }
}
