<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\registrar;


class registrarController extends Controller
{
    public function index(Request $request){
     return $request->all();
    }

    public function store(Request $request)
    {
        $usuarios = new registrar;
        //return $request->all();
        //encriptar contraseña
        $contrasena = \Hash::make($request->password); 
        $usuario = \DB::table('usuarios')->insert([
                'nombre' => $request->nombre,
                'email' => $request->email,
                'password' => $contrasena,
                'created_at'=>DATE('Y-m-d H:i:s'),
                'updated_at'=>DATE('Y-m-d H:i:s')
            ]);
        return view('index');
    }
}
