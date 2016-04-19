<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class loginController extends Controller
{
    public function index(Request $request){
     return $request->all();
    }


    public function store(Request $request){
        //dd("si entro a la funcion store");
        if (Auth::attempt(['nombre' => $request->nombre, 'password' => $request->pass])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
              $request->session()->put('user', $usuario);
              $data = array(
                'mascotas' => \DB::table('mascotas')->get(),
                );
               return redirect('/mascotas');
        }
        //dd("no entro");
            
            return back()->with('error', true); //peromite declarar una variable de sesion flash
    }

    public function logout1(){
        session()->forget('user');
        return redirect('/');
         
    }
}
