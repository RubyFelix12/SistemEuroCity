<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class clientesController extends Controller
{
    
    public function home(){
    	return view('home');
    }
 
    public function guardarCliente(Request $datos){
      $cliente= new Cliente();
    	$cliente->Correo=$datos->input('correo');
    	$cliente->Password=$datos->input('password');

    	$cliente->save();

    	//return Redirect('/');
      return redirect()->away('https://www.google.com.mx');

    }
    public function consultarClientes() {
        $clientes=Cliente::paginate(15);
        return view('consultarClientes', compact('clientes'));
    }

     public function clientesPDF(){
        $clientes=Cliente::all();
        $vista=view('clientesPDF', compact('clientes'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('Reporte de Clientes.pdf');
    

    //public function consultarAlumnos() {
       // $alumnos=Alumno::paginate(5);
        //return view('consultarAlumnos', compact('alumnos'));
    //}

   // public function eliminarAlumno($id){
       // $alumno=Alumno::find($id);
       // $alumno->delete();

      //  return Redirect('/consultarAlumnos');
    //}
        }
    
}