<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class adminController extends Controller
{
    
    public function home(){
    	return view('home');
    }
 
    public function guardarAdmin(Request $datos){
    
    	$user= new User();
    	$user->Name=$datos->input('name');
    	$user->Email=$datos->input('email');
    	$user->Password= Hash::make($datos->input('password'));
    	$user->save();

    return Redirect('/consultarAdmin');
      //return redirect()->away('https://www.google.com.mx');

    }
    public function consultarAdmin() {
        $users=user::paginate(10);
        return view('consultarAdmin', compact('users'));
    }

     public function eliminarAdmin($id) {
        $users=user::find($id);
        $users->delete();

        return Redirect('/consultarAdmin');
    }
    public function personalizacion() {
        return view('personalizacion');
    }

}

