<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use function Laravel\Prompts\alert;

class PageController extends Controller
{
    //
    public function inicio()
    {

        return view('inicio_vista');
    }

    public function carrera()
    {
        //$tablacarreras = Carrera::all();
        $tablacarreras = DB::table('carrera')->get();

        return view('carrera_vista', compact('tablacarreras'));
    }

    public function carreraById($id)
    {
        //$id= $item->id;
        $carrera = DB::table('carrera')->where('id', $id)->get();

        return view('editar_vista', compact('carrera'));
    }

    public function trails()
    {
        $tablatrails = Http::get('http://localhost:8080/api/trails');
        $trails = $tablatrails->json();

        //return response()->json($trails);

        return view('trail_vista', compact('trails'));
    }

    public function guardar(Request $request)
    {
        $ultimoId = DB::table('carrera')->count();
        $nuevoId = $ultimoId + 1;

        $carrera = new Carrera;
        $carrera->id = $nuevoId;
        $carrera->tipo = "Carrera";
        $carrera->fecha = $request->input('fecha');
        $carrera->distancia_km = $request->input('distancia');
        $carrera->duracion_min = $request->input('duracion');
        $carrera->save();

        $tablacarreras = DB::table('carrera')->get();

        return view('carrera_vista', compact('tablacarreras'));
    }

    public function borrar($id)
    {

        DB::table('carrera')->where('id', $id)->delete();

        alert("Registro borrado");

        $tablacarreras = DB::table('carrera')->get();

        return view('carrera_vista', compact('tablacarreras'));
    }

    public function editar(Request $request)
    {
        $id = $request->input('id');
        $fecha = $request->input('fecha');
        $distancia_km = $request->input('distancia');
        $duracion_min = $request->input('duracion');

        $tablacarreras = DB::table('carrera')->where('id', $id)->update([
            'fecha' => $fecha,
            'distancia_km' => $distancia_km,
            'duracion_min' => $duracion_min
        ]);


        $carrera = DB::table('carrera')->where('id', $id)->get();

        return view('editar_vista', compact('carrera'));
    }
}
