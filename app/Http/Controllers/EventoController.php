<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use Carbon\Carbon;
class EventoController extends Controller
{
    public function guardar(Request $request) {
    	$evento = new Evento();
    	$evento->titulo = $request->input('titulo');
    	$evento->url = $request->input('url');

    	$fecha_inicio = $request->input('fecha_inicio');
    	$fecha_fin = $request->input('fecha_fin');

    	$arreglo_fecha_inicio = explode('/',$fecha_inicio);
    	$arreglo_fecha_fin = explode('/',$fecha_fin);

    	$d_inicio = $arreglo_fecha_inicio[0];
    	$m_inicio = $arreglo_fecha_inicio[1];
    	$a_inicio = $arreglo_fecha_inicio[2];

    	$d_fin = $arreglo_fecha_fin[0];
    	$m_fin = $arreglo_fecha_fin[1];
    	$a_fin = $arreglo_fecha_fin[2];
    	
    	$fecha_inicio_nuevo = Carbon::createFromDate($a_inicio,$m_inicio,$d_inicio,'America/Mazatlan');
    	$fecha_fin_nuevo = Carbon::createFromDate($a_fin,$m_fin,$d_fin,'America/Mazatlan');

    	$evento->fecha_inicio = $fecha_inicio_nuevo;
    	$evento->fecha_fin = $fecha_fin_nuevo;
    	//dd(Carbon::now() >= $fecha_inicio_nuevo);
    	$evento -> save();

    	return Redirect('/personalizacion');
    }

    public function mostrar() {
    	$evento = Evento::where('fecha_inicio','<=',Carbon::now())->where('fecha_fin','>',Carbon::now())->first();
    	if(empty($evento)) {
    		$evento = Evento::where('titulo','=',' ')->first();
    	}

    	return view('welcome',compact('evento'));
    }

     public function eliminarEvento($id) {
        $evento=Evento::find($id);
        $evento->delete();

        return Redirect('/mostrarEvento');
    }

    public function editarEvento($id){
        $evento=Evento::find($id);
        return view('editarEvento', compact('evento'));
    }

    public function actualizarEvento(Request $datos, $id){
        $evento=Evento::find($id);
        $evento->titulo=$datos->input('titulo');
        $evento->url=$datos->input('url');
        $evento->fecha_inicio=$datos->input('fecha_inicio');
        $evento->fecha_fin=$datos->input('fecha_fin');
        $evento->save();

        return Redirect('/mostrarEvento');
    }

    public function mostrarEvento(){
        $evento=Evento::paginate(5);

        return view('mostrarEvento', compact('evento'));
}
}