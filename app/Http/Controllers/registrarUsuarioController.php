<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class registrarUsuarioController extends Controller
{
     
    public function home(){
    	return view('home');
    }
 
    public function guardarCliente(Request $datos){
    	$users= new User();
    	$users->name=$datos->input('name');
    	$users->email=$datos->input('email');
    	$users->password=$datos->input('password');



    	$users->save();
	}

	public function registraruser(){
		return view ('registraruser');
	}

}

 
