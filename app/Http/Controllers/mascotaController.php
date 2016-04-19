<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\mascotas;

class mascotaController extends Controller
{
    public function index(){
       $data = array(
            'mascotas' => \DB::table('mascotas')->get(),
        ); 
       return view('cuerpo',$data);
    }

    public function show(Request $request,$id){
        $data = array(
            'mascota' => \App\mascotas::find($id),
            'back' => (string)\URL::previous(),
        );
        return view('detalle',$data);
    }

    public function store(Request $request)
    {
         //dd("si entro");
        $mascota = new mascotas;

        //return $request->all();
        //encriptar contraseña 
        $mascota = \DB::table('mascotas')->insert([
                'nombre' => $request->nombre,
                'edad' => $request->edad,
                'tipo' => $request->tipo,
                'color' => $request->color,
                'created_at'=>DATE('Y-m-d H:i:s'),
                'updated_at'=>DATE('Y-m-d H:i:s')
            ]);
        return back()->with('exito', true); 
        
    }
}
