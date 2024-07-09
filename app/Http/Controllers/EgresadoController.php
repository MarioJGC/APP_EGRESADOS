<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresados;
use App\Models\User;
use GuzzleHttp\Client; // es una biblioteca popular de HTTP para PHP
use Illuminate\Support\Facades\View;

class EgresadoController extends Controller
{
    //metodo para la pagina principal de Actas de egresados
    public function index()
    {
        // Obtener todos los egresados
        $egresados = Egresados::orderBy('id', 'desc')->paginate();

        // Realizar la solicitud a la API para cada egresado
        foreach ($egresados as $egresado) {
            $egresado->success = $this->checkSuccess($egresado);
        }

        return view("egresados.index", compact('egresados'));
    }

    // método para verificar el éxito llamando a la API
    private function checkSuccess(Egresados $egresado)
    {
        // lógica para preparar los datos según tu API
        $data = [
            'Inputs' => [
                'data' => [
                    [
                        'edad_al_egresar' => $egresado->edad_al_egresar,
                        'publicaciones_academicas' => $egresado->publicaciones_academicas,
                        'puntaje_certificacion' => $egresado->puntaje_certificacion,
                        'num_idiomas_hablados' => $egresado->num_idiomas_hablados,
                        'proyectos_investigacion' => $egresado->proyectos_investigacion,
                        'habilidades_certificadas' => $egresado->habilidades_certificadas,
                        'tiempo_laboral_egresado' => $egresado->tiempo_laboral_egresado,
                    ]
                ]
            ],
            'GlobalParameters' => [
                'method' => 'predict'
            ]
        ];

        $body = json_encode($data);

        // url del servicio REST endpoint
        $url = 'http://5b4ffc07-5129-4fc5-bc86-cd85badcda4d.eastus.azurecontainer.io/score';

        // key de la api
        $api_key = 'e2MF7lN9bzHpCTkgJUW5MRJLpYYAcX42';

        // configuracion de la solicitud
        $client = new Client();
        $response = $client->post($url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $api_key,
            ],
            'body' => $body,
        ]);

        // manejo de la respuesta
        $status_code = $response->getStatusCode();
        $response_body = json_decode($response->getBody()->getContents(), true);

        return isset($response_body['Results'][0]) && $response_body['Results'][0] == 1;
    }

    public function showCharts()
    {
        // Obtener todos los egresados
        $egresados = Egresados::orderBy('id', 'desc')->get();

        // Calcular la probabilidad de éxito para cada egresado
        foreach ($egresados as $egresado) {
            $egresado->success = $this->checkSuccess($egresado);
        }

        // Contar egresados con probabilidad alta y baja de éxito
        $successCount = $egresados->where('success', true)->count();
        $failureCount = $egresados->where('success', false)->count();

        // Pasar los datos a la vista
        return view('egresados.charts', compact('successCount', 'failureCount'));
    }

    public function indexE()
    {
        // Obtener el email del usuario actualmente autenticado
        $userEmail = auth()->user()->email;

        // Buscar el egresado correspondiente en la tabla 'Egresados' basándote en el email
        $egresado = Egresados::where('email', $userEmail)->first();

        // Si se encontró un egresado, también busca el usuario correspondiente en la tabla 'User'
        $user = null;
        if ($egresado) {
            $user = User::where('email', $userEmail)->first();
        }

        return view("egresados.indexE", compact('egresado', 'user'));
    }
    
    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("egresados.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $egresado  = new Egresados();

        $egresado->nombre_egresado = $request->nombre_egresado;
        $egresado->grado_instruccion_egresado = $request->grado_instruccion_egresado;
        $egresado->especializacion_egresado = $request->especializacion_egresado;

        $egresado->edad_al_egresar = $request->edad_al_egresar;
        $egresado->publicaciones_academicas = $request->publicaciones_academicas;
        $egresado->puntaje_certificacion = $request->puntaje_certificacion;
        $egresado->num_idiomas_hablados = $request->num_idiomas_hablados;

        $egresado->proyectos_investigacion = $request->proyectos_investigacion;
        $egresado->habilidades_certificadas = $request->habilidades_certificadas;
        $egresado->sueldo_actual = $request->sueldo_actual;

        $egresado->empresa_id = $request->empresa_id;
        $egresado->cargo_empresa_egresado = $request->cargo_empresa_egresado;
        $egresado->tiempo_laboral_egresado = $request->tiempo_laboral_egresado;
        
        $egresado->save();
        return redirect()->route('egresados.show',$egresado);
    }

    //metodo para mostrar los detalles del registro
    public function show(Egresados $egresado){
        return view('egresados.show', compact('egresado'));
    }

    public function edit(Egresados $egresado){
        return view('egresados.edit', compact('egresado'));
    }

    public function update(Request $request, Egresados $egresado){
        $egresado->nombre_egresado = $request->nombre_egresado;
        $egresado->grado_instruccion_egresado = $request->grado_instruccion_egresado;
        $egresado->especializacion_egresado = $request->especializacion_egresado;
        $egresado->edad_al_egresar = $request->edad_al_egresar;
        $egresado->publicaciones_academicas = $request->publicaciones_academicas;
        $egresado->puntaje_certificacion = $request->puntaje_certificacion;
        $egresado->num_idiomas_hablados = $request->num_idiomas_hablados;
        $egresado->proyectos_investigacion = $request->proyectos_investigacion;
        $egresado->habilidades_certificadas = $request->habilidades_certificadas;
        $egresado->sueldo_actual = $request->sueldo_actual;
        $egresado->empresa_id = $request->empresa_id;
        $egresado->cargo_empresa_egresado = $request->cargo_empresa_egresado;
        $egresado->tiempo_laboral_egresado = $request->tiempo_laboral_egresado;
        
        $egresado->save();

        return redirect()->route('egresados.show', $egresado);
    }

    public function destroy(Egresados $egresado)

        {
            $egresado->delete();
            return redirect()->route('egresados.index')->with('success', 'Registro eliminado correctamente.');
        }

}
